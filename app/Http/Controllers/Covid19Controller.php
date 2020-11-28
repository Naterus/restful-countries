<?php

namespace App\Http\Controllers;

use App\Covid19;
use Illuminate\Http\Request;

class Covid19Controller extends Controller
{
    public function editCovid19($country){
        $covids = Covid19::whereCountryId($country)->first();
        return view("admin.covid-19",compact("covids"));
    }

    public function updateCovid19($country,Request $request){

        $this->validate($request,[
           "total_case" => "required|number",
           "total_deaths" => "required|number"
        ]);

        Covid19::whereCountryId($country)->update([
            "total_case" => $request->input("total_case"),
            "total_deaths" => $request->input("total_deaths"),
            "updated_by" => Auth::user()->email
        ]);

        return redirect()->back()->with("success","Covid19 stats updated successfully");
    }
}
