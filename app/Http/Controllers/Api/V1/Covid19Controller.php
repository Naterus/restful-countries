<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Covid19;
use App\Http\Controllers\Controller;
use App\Http\Resources\Covid19\Covid19Collection;
use App\Http\Resources\Covid19\Covid19OnlyResource;
use Illuminate\Http\Request;

class Covid19Controller extends Controller
{
    public function getAllCases(Request $request){


        $country =  $request->get('country');
        $deaths_from = $request->get('deaths_from');
        $deaths_to = $request->get('deaths_to');
        $total_from = $request->get('total_from');
        $total_to = $request->get('total_to');

        if(isset($deaths_from) && isset($deaths_to)){
            //Fetch based on deaths range
             return new Covid19Collection(Covid19::where("total_deaths",">=",$deaths_from)->where("total_deaths","<=",$deaths_to)->get());
        }

        if(isset($total_from) && isset($total_to)){
            //Fetch based on total case range
            return new Covid19Collection(Covid19::where("total_case",">=",$total_from)->where("total_case","<=",$total_to)->get());
        }

        if(isset($country)){
            //Fetch based on country name
            $country_id = Country::whereName(str_replace("-"," ",$country))->first();

            if($country) {
                return new Covid19OnlyResource(Covid19::whereCountryId($country_id->id)->first());
            }

            abort(404,"Covid19 Resource Not Found for specified country");
        }

        $country_count = Country::all()->count();
        $per_page = $request->get('per_page') ?: $country_count;

        return new Covid19Collection(Covid19::paginate($per_page));
    }
}
