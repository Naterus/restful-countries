<?php

namespace App\Http\Controllers;

use App\ApiRequest;
use App\Country;
use App\Covid19;
use App\FeedBack;
use App\Role;
use App\State;
use App\State2;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\PersonalAccessToken;

class AdminController extends Controller
{
    public function login(){

        return view('admin.login');
    }

    public function loginAttempt(Request $request){
        $this->validate($request,[
            "email" => "required",
            "password" => "required"
        ]);

        if(Auth::attempt([
            "email" => $request->input("email"),
            "password" => $request->input("password"),
            "status" => 1
        ],true)){

            return redirect()->intended("administrator/profile");
        }

        return redirect()->back()->with("error","Email or password incorrect");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("admin.login");
    }

    public function dashboard(){

        $current_api_version = env("APP_VERSION");
        $total_api_versions = 0;

        for ($version = 1; $version <= $current_api_version; $version++){
            $total_api_versions = $total_api_versions+1;
        }

        $feedbacks = FeedBack::all()->count();
        $total_requests = ApiRequest::all()->count();
        $failed_requests = ApiRequest::whereStatus(0)->count();
        $successful_requests = ApiRequest::whereStatus(1)->count();
        return view('admin.dashboard',compact("feedbacks","current_api_version","total_api_versions","total_requests","failed_requests","successful_requests"));
    }

    public function feedbacks(){
        $feedbacks = FeedBack::all();
        return view("admin.feedbacks",compact("feedbacks"));
    }

    public function apiRequests(){
        $api_requests = DB::table("api_requests")->orderBy("created_at","desc")->get();
        return view("admin.api-requests",compact("api_requests"));
    }

    public function users(){
        $users = User::where("status","!=",0)->get();
        $roles = Role::all();

        return view("admin.users",compact("users","roles"));
    }

    public function apiTokens(){
        $api_tokens = PersonalAccessToken::all();
        return view("admin.api-tokens",compact('api_tokens'));
    }

    public function profile(){
        return view("admin.profile");
    }

    public function updateProfile(Request $request){
        $validated_passwords = $this->validate($request,[
            "old_password" => "required",
            "password" => "required|min:7|max:16|confirmed",
        ]);

        if(password_verify($validated_passwords["old_password"],Auth::user()->password)){


            User::findOrFail(Auth::user()->id)->update([
               "password" => bcrypt($validated_passwords["password"])
            ]);
            return redirect()->back()->with("success","Password changed successfully.");

        }

        return redirect()->back()->with("error","Old password incorrect, please check and try again.");

    }

    public function createUser(Request $request){

        $this->validate($request,[
            "email" => "required|unique:users",
            "role" => "required",
            "password" => "required"
        ]);

        $name = $request->input("name");
        $email = $request->input("email");
        $role = $request->input("role");
        $password = $request->input("password");

        User::create([
            "name" => $name,
            "email" => $email,
            "role_id" => $role,
            "password" => bcrypt($password)
        ]);

        return redirect()->back()->with("success","User created successfully");
    }

    public function deleteUser(Request $request){
        $this->validate($request,[
            "user" => "required"
        ]);

        $user = $request->input("user");

        User::whereId($user)->delete();

        return redirect()->back()->with("success","User deleted successfully");
    }

}
