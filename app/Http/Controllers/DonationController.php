<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;

class DonationController extends Controller
{

    public function paystackGatewayCallback(Request $request){

        $payment_reference = $request->reference_no;

        if(is_null($payment_reference)){

            return redirect()->route("donate")->with([
                'error' =>  "Opps! your donation was not successful."
            ]);

        }else{
            return redirect()->route("donate")->with([
                'success' =>  "Thank you for your donation."
            ]);
        }
    }

}
