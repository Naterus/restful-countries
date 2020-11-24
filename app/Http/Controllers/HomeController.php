<?php

namespace App\Http\Controllers;

use App\Country;
use App\Country2;
use App\District;
use App\FeedBack;
use App\State;
use App\State2;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    public function index(){

        ini_set('max_execution_time', '3000');

        /**
        $old_country = Country2::all();
        foreach ($old_country as $country2){
        $new_name = str_replace(" ","-",$country2->name);
        Country::create([
        "name" => $country2->name,
        "code" => $country2->phonecode,
        "iso2" => $country2->iso2,
        "iso3" => $country2->iso3,
        "currency" => $country2->currency,
        "capital" => $country2->capital,
        "flag" => $new_name.".png"
        ]);
        }
         *
         *
         * */

        /**
        $old_state = State2::all();
        foreach ($old_state as $country2){

            State::create([
                "country_id" => $country2->country_id,
                "name" => $country2->name,
                "iso2" => $country2->iso2,
                "fips_code" => $country2->fips_code,
            ]);
        }
         *
         *
         * */


        $countries = Country::all()->count();
        $states = State::all()->count();
        $districts = District::all()->count();
        return view("welcome",compact('countries','states','districts'));
    }

    public function documentation($version){
        $latest_version = env("APP_VERSION");

        if($version > $latest_version || $version < 1){
            $error = "Api version not available";
            return view("docs.v".$latest_version,compact('error'));
        }

        return view("docs.v".$version,compact('version'));
    }

    public function countries(){
        $countries = Country::all();
        $country = Country::whereId(1)->first();
        return view("countries",compact('countries','country'));
    }

    public function country($country){
        $country = Country::whereId($country)->first();
        $countries = Country::all();
        return view("countries",compact('country','countries'));
    }

    public function donate(){
        return view('donate');
    }

    public function feedback(){
        return view('feedback');
    }

    public function submitFeedback(Request $request){
        $this->validate($request,[
            "feedback_category" => "required",
            "feedback" => "required",
        ]);

        FeedBack::create([
            "email" => $request->input("email"),
            "category" => $request->input("feedback_category"),
            "feedback" => $request->input("feedback"),
        ]);

        return redirect()->back()->with("success","Thanks for submitting a feedback, we will look into it soon.");
    }



}
