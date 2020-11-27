<?php

namespace App\Http\Controllers;

use App\Country;
use App\District;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DistrictController extends Controller
{
    public function districts($country,$state){
        $districts = District::whereCountryId($country)->whereStateId($state)->get();
        $state = State::whereCountryId($country)->whereId($state)->first();
        $country = Country::whereId($country)->first();
        return view("admin.districts",compact("districts","country","state"));
    }

    public function editDistrict($country,$state,$district){
        $district = District::whereCountryId($country)->whereStateId($state)->whereId($district)->first();
        $state = State::whereCountryId($country)->whereId($state)->first();
        $country = Country::whereId($country)->first();

        return view("admin.edit-district",compact("district","state","country"));

    }

    public function updateDistrict($country,$state,$district,Request $request){
        $this->validate($request, [
              "name" => "required"
            ]);
        District::whereCountryId($country)->whereStateId($state)->whereId($district)->update([
            "name" => $request->input("name"),
            "updated_by" => Auth::user()->email,
        ]);

        return redirect()->back()->with("success","District updated successfully");
    }

    public function createDistrict($country,$state,Request $request){

        $this->validate($request, [
            "name" => "required"
        ]);


        District::create([
            "country_id" => $country,
            "state_id" => $state,
            "name" => $request->input("name"),
            "created_by" => Auth::user()->email,
        ]);

        return redirect()->back()->with("success","District created successfully");

    }
}
