<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\Country\CountryResource;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountries(Request $request){
        //Get country by name
        $country_name = $request->name;
        $has_state = $request->hasState;

        if(isset($country_name)){
            $country = Country::whereName($country_name)->first();
            return new CountryResource($country);
        }

        //Get country by Id if name parameter is not supplied
        $countries = Country::all();
        return CountryResource::collection($countries);
    }

    public function findById(Country $country,Request $request){

        return new CountryResource($country);
    }
}
