<?php

namespace App\Http\Controllers;

use App\Country;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function states($country){
        $states = State::whereCountryId($country)->orderBy("name","ASC")->get();
        $country = Country::whereId($country)->first();
        return view("admin.states",compact("states","country"));
    }

    public function createState($country,Request $request){

        $this->validate($request,[
            "name" => "required"
        ]);


        State::create([
            "country_id" => $country,
            "name" => $request->input("name"),
            "nick_name" => $request->input("nick_name"),
            "slogan" => $request->input("slogan"),
            "iso2" => $request->input("iso2"),
            "official_language" => $request->input("official_language"),
            "fips_code" => $request->input("fips_code"),
            "population" => $request->input("population"),
            "size" => $request->input("size"),
            "region" => $request->input("region"),
        ]);

        return redirect()->back()->with("success","State created successfully");

    }

    public function editState($country,$state){

        $state = State::whereCountryId($country)->whereId($state)->first();
        return view("admin.edit-state",compact("state"));


    }

    public function updateState($country,$state,Request $request){

        $this->validate($request,[
            "name" => "required"
        ]);


        $state = State::whereCountryId($country)->whereId($state)->update([
            "name" => $request->input("name"),
            "nick_name" => $request->input("nick_name"),
            "slogan" => $request->input("slogan"),
            "iso2" => $request->input("iso2"),
            "official_language" => $request->input("official_language"),
            "population" => $request->input("population"),
            "size" => $request->input("size"),
            "region" => $request->input("region"),
        ]);

        return redirect()->back()->with("success","State updated successfully");

    }

    public function deleteState(Request $request){
        $this->validate($request,[
              "country" => "required",
               "state" => "required"
            ]);

        $country = $request->input("country");
        $state = $request->input("state");


        State::whereCountryId($country)->whereId($state)->delete();


        return redirect()->back()->with("success","States deleted successfully");
    }

}
