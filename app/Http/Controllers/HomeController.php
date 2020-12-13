<?php

namespace App\Http\Controllers;

use App\FeedBack;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        return view("welcome");
    }

    //Method to redirect to latest api version if version id is not provided
    public function docs(){
        return redirect()->route("documentation",env("APP_VERSION"));
    }

    public function documentation($version){
        $latest_version = env("APP_VERSION");

        if($version > $latest_version || $version < 1){
            $error = "Api version not available";
            return view("docs.v".$latest_version,compact('latest_version','error'));
        }

        return view("docs.v".$version,compact('version'));
    }

    public function donate(Request $request){
        $success = $request->get("success");
        $message = null;

        if(isset($success)){
            if($success == "yes"){
                $success = "Thank you for your donation.";
                return view('donate',compact("success"));
            }else{
                $error = "Opps! Donation was not completed.";
                return view('donate',compact("error"));
            }
        }
        return view('donate');
    }

    public function feedback(){
        return view('feedback');
    }

    public function submitFeedback(Request $request){
        $this->validate($request,[
            "feedback_category" => "required",
            "feedback" => "required|max:450",
        ]);

        FeedBack::create([
            "email" => $request->input("email"),
            "category" => $request->input("feedback_category"),
            "feedback" => $request->input("feedback"),
        ]);

        return redirect()->back()->with("success","Thanks for your feedback.");
    }

    public function requestAccessToken(){
        return view("request-token");
    }

    public function generateApiToken(Request $request){
        $validated_details = $this->validate($request,[
            "email" => "required|unique:users|min:6|max:40",
            "website" => "string|max:40"
        ]);

        $created_user = User::create([
            "email" => $validated_details["email"],
            "website" => $validated_details["website"],
            "password" => bcrypt($validated_details["email"]),
            "status" => 0
        ]);

        $api_token = $created_user->createToken('authToken')->accessToken;

        return redirect()->back()->with([
            "success" => "Api access Token generated successfully. Kindly copy and use as authorization bearer token to all requests.",
            "api_token"  => $api_token
        ]);
    }
}
