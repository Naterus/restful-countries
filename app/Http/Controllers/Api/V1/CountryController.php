<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\Country\CountryResource;
use App\Http\Resources\Country\CountryCollection;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountries(Request $request){
        //Get country by name
        $country_name = $request->get("name");

        if(isset($country_name)){
            $country = Country::whereName($country_name)->first();
            return new CountryResource($country);
        }


        $country_count = Country::all()->count();

        //Return all countries if per_page is not provided
        $per_page = $request->get('per_page') ?: $country_count;

        //Get country by Id if name parameter is not supplied
        return new CountryCollection(Country::paginate($per_page));
    }

    public function findById(Country $country,Request $request){

        return new CountryResource($country);
    }
}
