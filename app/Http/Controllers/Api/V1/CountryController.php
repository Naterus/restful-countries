<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\Country\CountryResource;
use App\Http\Resources\Country\CountryCollection;
use App\Http\Resources\Country\SlimCountryResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use function PHPUnit\Framework\throwException;

class CountryController extends Controller
{
    public function getCountries(Request $request){


        $country_count = Country::all()->count();

        //Optional route parameters
        $per_page = $request->get('per_page') ?: $country_count;
        $continent = $request->get('continent');
        $iso2 = $request->get('iso2');
        $iso3 = $request->get('iso3');
        $code = $request->get('code');
        $population_from = $request->get('population_from');
        $population_to = $request->get('population_to');
        $size_from = $request->get('size_from');
        $size_to = $request->get('size_to');

        if(isset($population_from) && isset($population_to)){
            //Find by population
            if($request->fetch_type == "slim"){
                return SlimCountryResource::collection(Country::where("population",">=",$population_from)->where("population","<=",$population_to)->orderBy("name","ASC")->paginate($per_page));
            }
            return new CountryCollection(Country::where("population",">=",$population_from)->where("population","<=",$population_to)->orderBy("name","ASC")->paginate($per_page));
        }


        if(isset($size_from) && isset($size_to)){
            if($request->fetch_type == "slim"){
                //Apply slim fetch for countries by size endpoint
                return SlimCountryResource::collection(Country::where("size",">=",$size_from)->where("size","<=",$size_to)->orderBy("name","ASC")->paginate($per_page));
            }

            return new CountryCollection(Country::where("size",">=",$size_from)->where("size","<=",$size_to)->orderBy("name","ASC")->paginate($per_page));
        }

        if(isset($continent)){
            //Find countries by continent
            return new CountryCollection(Country::whereContinent(str_replace("-"," ",$continent))->orderBy("name","ASC")->paginate($per_page));
        }

        if(isset($code)){
            //Find country by country code
            //No need to paginate as we expect just one country
            return new CountryResource(Country::whereCode($code)->first());
        }

        if(isset($iso2)){
            //Find country by iso2
            //No need to paginate as we expect just one country
            return new CountryResource(Country::whereIso2($iso2)->first());
        }

        if(isset($iso3)){
            //Find country by iso3
            //No need to paginate as we expect just one country
            return new CountryResource(Country::whereIso3($iso3)->first());
        }


        if($request->fetch_type == "slim"){
            //Apply slim fetch to call countries endpoint
            return SlimCountryResource::collection(Country::paginate($per_page));
        }

        return new CountryCollection(Country::paginate($per_page));

    }

    public function getCountry($country,Request $request){

        //remove hyphen from country name e.g south-africa to south africa
        $country = Country::whereName(str_replace("-"," ",$country))->first();

        if($country) {
            return new CountryResource($country);
        }

        abort(404,"Country Resource Not Found. Check that it is spelt correctly");
    }
}
