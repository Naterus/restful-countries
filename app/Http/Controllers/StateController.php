<?php

namespace App\Http\Controllers;

use App\Country;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function states($country){
        $states = State::whereCountryId($country)->get();
        $country = Country::whereId($country)->first();
        return view("admin.states",compact("states","country"));
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
            "description" => $request->input("description"),
            "official_language" => $request->input("official_language"),
            "population" => $request->input("population"),
            "governor" => $request->input("governor"),
            "size" => $request->input("size"),
            "region" => $request->input("region"),
        ]);

        return redirect()->back()->with("success","State updated successfully");

    }

}
