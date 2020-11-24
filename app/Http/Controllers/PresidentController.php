<?php

namespace App\Http\Controllers;

use App\Country;
use App\President;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PresidentController extends Controller
{
    public function presidents($country){
        $presidents = President::whereCountryId($country)->get();
        $country = Country::whereId($country)->first();
        return view("admin.presidents",compact("presidents","country"));
    }

    public function editPresident($country,$president){

        $president = President::whereCountryId($country)->whereId($president)->first();
        $country = Country::whereId($country)->first();
        return view("admin.edit-president",compact("president","country"));
    }

    public function createPresident($country,Request $request){

        $this->validate($request,[
            "name" => "required",
            "gender" => "required",
            "appointment_start_date" => "required",
            "appointment_end_date" => "required",
        ]);

        $image = $request->picture;
        $name = $request->name;
        $extension = $image->getClientOriginalExtension();
        $file_name = Str::lower(str_replace(" ","-",$name).Str::random(10).".".$extension);
        Storage::putFileAs('public/images/presidents/',$image,$file_name);
        $appointment_start_date = date('Y-m-d', strtotime($request->appointment_start_date));
        $appointment_end_date = date('Y-m-d', strtotime($request->appointment_end_date));

        President::create([
            "name" => $name,
            "country_id" => $country,
            "gender" => $request->input("gender"),
            "appointment_start_date" => $appointment_start_date,
            "appointment_end_date" => $appointment_end_date,
            "picture" => $file_name
        ]);
        return redirect()->back()->with("success","President created successfully");

    }

    public function updatePresident($country,$president,Request $request){

        $this->validate($request,[
            "name" => "required",
            "gender" => "required",
            "appointment_start_date" => "required",
            "appointment_end_date" => "required",
        ]);

        $image = $request->picture;
        $name = $request->name;
        $appointment_start_date = date('Y-m-d', strtotime($request->appointment_start_date));
        $appointment_end_date = date('Y-m-d', strtotime($request->appointment_end_date));
        if(isset($image)) {

            $extension = $image->getClientOriginalExtension();
            $file_name = Str::lower(str_replace(" ", "-", $name) . Str::random(10) . "." . $extension);
            Storage::putFileAs('public/images/presidents/', $image, $file_name);

            President::whereCountryId($country)->whereId($president)->update([
                "name" => $name,
                "gender" => $request->input("gender"),
                "appointment_start_date" => $appointment_start_date,
                "appointment_end_date" => $appointment_end_date,
                "picture" => $file_name
            ]);
        } else {
            President::whereCountryId($country)->whereId($president)->update([
                "name" => $name,
                "gender" => $request->input("gender"),
                "appointment_start_date" => $appointment_start_date,
                "appointment_end_date" => $appointment_end_date,
            ]);
        }
        return redirect()->back()->with("success","President updated successfully");

    }

}
