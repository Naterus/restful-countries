<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\Country\CountryResource;
use App\Http\Resources\Country\CountryCollection;
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
        $region = $request->get('region');

        if(isset($continent)){
            //Find countries by continent
            return new CountryCollection(Country::whereContinent(str_replace("-"," ",$continent))->paginate($per_page));
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
