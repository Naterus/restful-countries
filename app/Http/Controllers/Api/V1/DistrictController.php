<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\District;
use App\Http\Controllers\Controller;
use App\Http\Resources\District\DistrictCollection;
use App\Http\Resources\District\DistrictResource;
use App\State;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistricts($country,$state,Request $request){
        $districts = District::whereCountryId($country)->whereStateId($state)->get();
        return new DistrictCollection($districts);
    }

    public function getDistrict($country,$state,$district,Request $request){
        $country_id = Country::whereName($country)->first();
        $state_id = State::whereName($state)->whereCountryId($country_id->id ?: null)->first();
        $district = District::whereCountryId($country_id->id ?: null)->whereStateId($state_id->id ?: null)->whereName($district)->first();
        return new DistrictResource($district);
    }
}
