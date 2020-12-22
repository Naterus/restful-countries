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
            "website" => "max:40"
        ]);

        $existing_user = User::whereEmail($validated_details["email"])->first();

        if($existing_user){
            return redirect()->back()->with([
                "error" => "API access Token has already been generated for this email. 
                            If this is your email address, please click \"Refresh Token\" below to generate a new access
                            token.",
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
            $created_user->tokens()->delete();
            $created_user->delete();

            return redirect()->back()->with([
                "error" => $e->getMessage(),
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
        $mail_message = "Congratulations!, you successfully generated a new access token for restful countries api, please ignore this mail if you did not request for this service";

        try {
            $mail->to($validated_details["email"])->send(new AccessTokenMail( $api_token,$validated_details["email"],$mail_message));
        }catch (\Exception $e){
            $existing_user->tokens()->delete();

            return redirect()->back()->with([
                "error" => $e->getMessage(),
            ]);

        }

        return redirect()->back()->with([
            "success" => "New api token has been sent to your mail successfully"
        ]);
    }
}
