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

        $country_count = Country::all()->count();

        //Return all countries if per_page is not provided
        $per_page = $request->get('per_page') ?: $country_count;

        $continent = $request->get('continent');

        if(isset($continent)){
            return new CountryCollection(Country::whereContinent($continent)->paginate($per_page));
        }

        return new CountryCollection(Country::paginate($per_page));
    }

    public function getCountry($country,Request $request){

        $country = Country::whereName($country)->first();

        return new CountryResource($country);
    }
}
