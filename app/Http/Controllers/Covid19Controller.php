<?php

namespace App\Http\Controllers;

use App\Country;
use App\Covid19;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Covid19Controller extends Controller
{
    public function editCovid19($country){
        $covid = Covid19::whereCountryId($country)->first();
        return view("admin.covid-19",compact("covid"));
    }

    public function updateCovid19($country,Request $request){

        $this->validate($request,[
           "total_case" => "required",
           "total_deaths" => "required"
        ]);

        Covid19::whereCountryId($country)->update([
            "total_case" => $request->input("total_case"),
            "total_deaths" => $request->input("total_deaths"),
            "updated_by" => Auth::user()->id
        ]);

        return redirect()->back()->with("success","Covid19 stats updated successfully");
    }

    public function importData(Request $request){

        $this->validate($request,[
            "covid_csv" => "required"
        ]);

        //Extend execution time
        ini_set("max_execution_time",1500);

        //Upload file
        $file = $request->covid_csv;
        $extension = $file->getClientOriginalExtension();

        if($extension != "csv"){
            return redirect()->back()->with([
                "error" => "Invalid file, please upload a csv file."
            ]);
        }

        $file_name = "covid-19".str_replace(" ","_",now()).".".$extension;
        Storage::putFileAs('public/docs/', $file, $file_name);

        $countries = Country::all();
        //Read uploaded file
        $covid_csv_file = fopen(asset("storage/docs/".$file_name),'r');

        $csv_fields = fgetcsv($covid_csv_file);

        //Validate columns
        if($csv_fields[0] != "Name" && $csv_fields[2] != "Cases - cumulative total" && $csv_fields[6] != "Deaths - cumulative total"){
            return redirect()->back()->with("error","Invalid csv format,check that columns are correct");
        }


        //Check if file has content
        while(!feof($covid_csv_file)){
            $covidData[] = fgetcsv($covid_csv_file);
        }

        foreach ($covidData as $key => $value) {

            // $value[0] = country , $value[2] = Total cases , $value[6] = Total deaths
            foreach ($countries as $country){
                if($value[0] == $country->name && $value[2] != "" && $value[6] != ""){
                    Covid19::whereCountryId($country->id)->update([
                        "total_case" => $value[2],
                        "total_deaths" => $value[6],
                        "updated_by" => Auth::user()->id,
                    ]);
                }
            }
        }

        return redirect()->back()->with("success","Covid19 data updated successfully");

    }
}
