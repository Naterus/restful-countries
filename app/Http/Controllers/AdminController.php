<?php

namespace App\Http\Controllers;

use App\ApiRequest;
use App\Country;
use App\FeedBack;
use App\President;
use App\Role;
use App\State;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Auth;

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
        $api_requests = ApiRequest::all();
        return view("admin.api-requests",compact("api_requests"));
    }

    public function users(){
        $users = User::all();
        $roles = Role::all();

        return view("admin.users",compact("users","roles"));
    }

    public function profile(){
        return view("admin.profile");
    }

    public function changePassword(Request $request){
        $this->validate($request,[
           "old_password" => "required",
            "new_password" => "required",
            "password_confirm" => "required"
        ]);


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



}
