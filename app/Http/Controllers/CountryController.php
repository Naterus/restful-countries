<?php

namespace App\Http\Controllers;

use App\Country;
use App\President;
use App\State;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function countries(){
        $countries = Country::all();
        return view("admin.countries",compact("countries"));
    }

    public function editCountry($id){
        $country = Country::whereId($id)->first();
        return view("admin.edit-country",compact("country"));
    }

    public function deleteCountry(Request $request){
        $this->validate($request,[
            "country" => "required"
        ]);

        $country = $request->input("country");

        Country::whereId($country)->delete();

        $states = State::whereCountryId($country)->get();

        $presidents = President::whereCountryId($country)->get();

        //Delete Presidents
        foreach ($presidents as $president) {
            President::whereId($president->id)->whereCountryId($country)->delete();
        }


        //Delete States and districts
        foreach ($states as $state){
            //Delete states
            State::whereId($state->id)->whereCountryId($country)->delete();
        }

        return redirect()->back()->with("success","Country and associated states and districts deleted successfully.");
    }

    public function createCountry(Request $request){

        $this->validate($request,[
            "name" => "required|unique:countries"
        ]);


        $country = Country::create([
            "name" => $request->input("name"),
            "nick_name" => $request->input("nick_name"),
            "full_name" => $request->input("full_name"),
            "description" => $request->input("description"),
            "iso2" => $request->input("iso2"),
            "iso3" => $request->input("iso3"),
            "currency" => $request->input("currency"),
            "official_language" => $request->input("official_language"),
            "capital" => $request->input("capital"),
            "population" => $request->input("population"),
            "independence_day" => $request->input("independence_day"),
            "size" => $request->input("size"),
            "continent" => $request->input("continent"),
            "region" => $request->input("region"),
        ]);

        return redirect()->back()->with("success","Country created successfully");

    }

    public function updateCountry($id,Request $request){

        $this->validate($request,[
            "name" => "required"
        ]);


        $country = Country::findOrFail($id)->update([
            "name" => $request->input("name"),
            "nick_name" => $request->input("nick_name"),
            "full_name" => $request->input("full_name"),
            "description" => $request->input("description"),
            "iso2" => $request->input("iso2"),
            "iso3" => $request->input("iso3"),
            "currency" => $request->input("currency"),
            "official_language" => $request->input("official_language"),
            "capital" => $request->input("capital"),
            "population" => $request->input("population"),
            "independence_day" => $request->input("independence_day"),
            "president" => $request->input("president"),
            "size" => $request->input("size"),
            "continent" => $request->input("continent"),
            "code" => $request->input("code"),
        ]);

        return redirect()->back()->with("success","Country updated successfully");

    }
}
