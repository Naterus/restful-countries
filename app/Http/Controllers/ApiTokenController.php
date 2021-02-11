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

    public function generateApiToken(Request $request,Mailer $mail): \Illuminate\Http\JsonResponse
    {
        $validated_details = $this->validate($request,[
            "email" => "required|min:6|email",
            "website" => "nullable|url"
        ]);

        $existing_user = User::whereEmail($validated_details["email"])->first();

        if($existing_user){
            return response()->json([
                "error" => 'API access Token has already been generated for this email.
                            If this is your email address, please click Refresh Token below to generate a new access
                            token.',
            ],409);
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
            //$created_user->tokens()->delete();
            //$created_user->delete();

            //todo - this error should be avoided

            return response()->json([
                "success" => 'Your API key has been successfully created but there was as error while sending it to your mail. Please find your key in the field below.',
                "api_token" => $api_token
            ],202);
        }

        return response()->json([
            "success" => "Your Api Access Token has been sent to your email successfully.",
        ],201);
    }

    public function regenerateApiToken(Request $request,Mailer $mail): \Illuminate\Http\JsonResponse
    {
        $validated_details = $this->validate($request,[
            "email" => "required|min:6|max:40",
        ]);

        $existing_user = User::whereEmail($validated_details["email"])->first();

        if(!$existing_user){
            return response()->json([
                "error" => "Api access Token has not been generated for this email.",
            ],404);
        }

        $existing_user->tokens()->delete();

        $api_token = $existing_user->createToken('authToken')->plainTextToken;
        $mail_message = "Congratulations!, you successfully generated a new access token for restful countries api, please ignore this mail if you did not request for this service";

        try {
            $mail->to($validated_details["email"])->send(new AccessTokenMail( $api_token,$validated_details["email"],$mail_message));
        }catch (\Exception $e){

            $existing_user->tokens()->delete();

            return response()->json([
                "error" =>'Oops! Failure regenerating your API key',
            ],409);

        }

        return response()->json([
            "success" => "New api token has been sent to your mail successfully"
        ],201);
    }

    public function revokeToken(Request $request): \Illuminate\Http\RedirectResponse
    {
         $validated_details = $this->validate($request,[
             "token_id" => "required"
         ]);


        $existing_user = User::whereId($validated_details["token_id"])->first();

        $existing_user->tokens()->delete();

        return redirect()->back()->with([
            "success" => "Api access token revoked successfully"
        ]);

    }
}
