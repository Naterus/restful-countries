<?php

namespace App\Http\Controllers\Api\V1;

use App\Country;
use App\District;
use App\Http\Controllers\Controller;
use App\Http\Resources\District\DistrictCollection;
use App\Http\Resources\District\DistrictResource;
use App\State;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;

class DistrictController extends Controller
{
    public function getDistricts($country, $state, Request $request)
    {

        $country = Country::whereName(str_replace("-", " ", $country))->first();
        if ($country) {
            $state = State::whereCountryId($country->id ?: null)->where("name", str_replace("-", " ", $state))->orderBy("name", "ASC")->first();
            if ($state) {
                $disticts = District::where("country_id", $country->id)->where("state_id", $state->id)->get();

                return new DistrictCollection($disticts);
            }
            throw new ModelNotFoundException("District resource not found");

        }
        throw new ModelNotFoundException("District resource not found");


    }

    public function upload(Request $request){

            try {
                $files = Excel::toArray([],$request->file("file"));

                $country = Country::where("name","Nigeria")->first();


                foreach ($files[0] as $file){

                    if($file[0] !== "SNo" && is_numeric($file[0])){
                        //dd($file[2]);

                        if($file[2] === "Abuja FCT"){
                            $state = State::where("country_id",$country->id)->where("name","Federal Capital Territory")->first();
                        }else {
                            $state = State::where("country_id",$country->id)->where("name",$file[2])->first();
                        }

                        if($state){
                            $district = new District();
                            $district->name = $file[1];
                            $district->country_id = $country->id;
                            $district->state_id = $state->id;
                            $district->save();
                        }
                    }
                }
                return "Success";
            } catch (\Exception $e) {
                throw new ModelNotFoundException($e->getMessage());
            }
    }

    public function getDistrict($country, $state)
    {
        //Get country_id using country name to find state
        $country_id = Country::whereName(str_replace("-", " ", $country))->first();
        if ($country) {

            $state = State::whereName(str_replace("-", " ", $state))->whereCountryId($country_id->id ?: null)->first();

            if ($state) {
                return new StateResource($state);
            }

            throw new ModelNotFoundException("State resource not found");
        }
    }
}
