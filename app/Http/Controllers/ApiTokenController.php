<?php

namespace App\Http\Controllers;

use App\Mail\AccessTokenMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;

class ApiTokenController extends Controller
{
    public function requestAccessToken(){
        return view("request-token");
    }

    public function generateApiToken(Request $request,Mailer $mail){
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

        $api_token = $created_user->createToken('authToken')->plainTextToken;

        try {
            $mail->to($validated_details["email"])->send(new AccessTokenMail( $api_token,$validated_details["email"]));
        }catch (\Exception $e){

            return redirect()->back()->with([
                "success" => "Api Access Token been generated successfully but failed to send mail. Please find your API Access Token below",
                "api_token" => $api_token
            ]);

        }

        return redirect()->back()->with([
            "success" => "Api access Token has been sent to your email successfully.",
        ]);
    }
}
