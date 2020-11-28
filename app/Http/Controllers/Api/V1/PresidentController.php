<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\President\PresidentCollection;
use App\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function getPresidents($country){

        //remove hyphen from country name e.g south-africa to south africa
        $country_id = Country::whereName(str_replace("-"," ",$country))->first();

         return new PresidentCollection(President::whereCountryId($country_id->id ? : null)->get());
    }
}
