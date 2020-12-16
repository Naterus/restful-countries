<?php

namespace App\Http\Controllers;

use App\Mail\AccessTokenMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;

class ApiTokenController extends Controller
{
    public function requestApiToken(){
        return view("request-token");
    }

    public function refreshApiToken(){
        return view("refresh-token");
    }

    public function generateApiToken(Request $request,Mailer $mail){
        $validated_details = $this->validate($request,[
            "email" => "required|min:6|max:40",
            "website" => "string|max:40"
        ]);

        $existing_user = User::whereEmail($validated_details["email"])->first();

        if($existing_user){
            return redirect()->back()->with([
                "error" => "Api access Token has already been generated for this email, refresh token if you don't have access to it.",
            ]);
        }

        $created_user = User::create([
            "email" => $validated_details["email"],
            "website" => $validated_details["website"],
            "password" => bcrypt($validated_details["email"]),
            "status" => 0
        ]);

        $api_token = $created_user->createToken('authToken')->plainTextToken;
        $mail_message = "Below is your access token for restful countries api, please ignore is you did not request for this service";

        try {
            $mail->to($validated_details["email"])->send(new AccessTokenMail( $api_token,$validated_details["email"],$mail_message));
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

    public function regenerateApiToken(Request $request,Mailer $mail){
        $validated_details = $this->validate($request,[
            "email" => "required|min:6|max:40",
        ]);

        $existing_user = User::whereEmail($validated_details["email"])->first();

        if(!$existing_user){
            return redirect()->back()->with([
                "error" => "Api access Token has not been generated for this email.",
            ]);
        }

        $existing_user->tokens()->delete();

        $api_token = $existing_user->createToken('authToken')->plainTextToken;
        $mail_message = "Congratulations!, you successfully generated a new access token for restful countries api, please ignore if you did not request for this service";

        try {
            $mail->to($validated_details["email"])->send(new AccessTokenMail( $api_token,$validated_details["email"],$mail_message));
        }catch (\Exception $e){

            return redirect()->back()->with([
                "success" => "Api access Token been regenerated successfully but failed to send mail. below is your new api key",
                "api_token" => $api_token
            ]);

        }

        return redirect()->back()->with([
            "success" => "New api token has been sent to your mail successfully"
        ]);
    }
}
