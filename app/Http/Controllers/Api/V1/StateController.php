<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\State\SlimStateResource;
use App\Http\Resources\State\StateCollection;
use App\Http\Resources\State\StateResource;
use App\State;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class StateController extends Controller
{

    public function getStates($country,Request $request){

        $country = Country::whereName(str_replace("-"," ",$country))->first();
        $states  = State::whereCountryId($country->id ? : null)->orderBy("name","ASC")->get();

        if($request->fetch_type == "slim"){
            return SlimStateResource::collection($states);
        }
        return new StateCollection($states);
    }

    public function getState($country,$state){
        //Get country_id using country name to find state
        $country_id = Country::whereName(str_replace("-"," ",$country))->first();

        $state = State::whereName(str_replace("-"," ",$state))->whereCountryId($country_id->id ?: null)->first();

        if($state) {
            return new StateResource($state);
        }

        throw new ModelNotFoundException("State resource not found");
    }

}
