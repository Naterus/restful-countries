<?php

namespace App\Http\Controllers;

use App\Covid19;
use Auth;
use Illuminate\Http\Request;

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
}
