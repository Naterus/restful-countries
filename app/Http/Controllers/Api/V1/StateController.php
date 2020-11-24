<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\State\StateResource;
use App\State;
use Illuminate\Http\Request;

class StateController extends Controller
{

    public function getStates($country){
        $states  = State::whereCountryId($country)->get();
        return StateResource::collection($states);
    }

    public function findById($country,$state){
        $state  = State::whereCountryId($country)->whereId($state)->first();
       return new StateResource($state);
   }

}
