<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Resources\President\PresidentCollection;
use App\Http\Resources\President\PresidentResource;
use App\President;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function getPresidents($country){

        //remove hyphen from country name e.g south-africa to south africa
        $country_id = Country::whereName(str_replace("-"," ",$country))->first();

        return new PresidentCollection(President::whereCountryId($country_id->id ? : null)->get());

    }

    public function getPresident($country,$president){
        $country_id = Country::whereName(str_replace("-"," ",$country))->first();

        if($country_id){
            $president = President::whereCountryId($country_id->id ? : null)->whereName(str_replace("-"," ",$president))->first();

            if($president) {
                return new PresidentResource($president);
            }

            throw new ModelNotFoundException("President resource not found");

        }

    }
}
