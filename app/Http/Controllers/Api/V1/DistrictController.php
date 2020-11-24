<?php

namespace App\Http\Controllers\Api\V1;

use App\District;
use App\Http\Controllers\Controller;
use App\Http\Resources\District\DistrictResource;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function getDistricts($country,$state,Request $request){
        $districts = District::whereCountryId($country)->whereStateId($state)->get();
        return DistrictResource::collection($districts);
    }

    public function findById($country,$state,$district,Request $request){
        $district = District::whereCountryId($country)->whereStateId($state)->whereId($district)->first();
        return new DistrictResource($district);
    }
}
