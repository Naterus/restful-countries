<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\State\StateCollection;
use App\Http\Resources\State\StateResource;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{

    public function getStates($country){

        $country = Country::whereName($country)->first();
        $states  = State::whereCountryId($country->id ? : null)->get();
        return new StateCollection($states);
    }

    public function getState($country,$state){
        $country_id = Country::whereName($country)->first();
        $state_id = State::whereName($state)->first();
        $state  = State::whereCountryId($country_id->id ?: null)->whereId($state_id->id ?: null)->first();
       return new StateResource($state);
   }

}
