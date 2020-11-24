<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;

class DonationController extends Controller
{

    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function paypalCharge(Request $request)
    {

        try {
            $response = $this->gateway->purchase(array(
                'amount' => $request->input('amount'),
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => route('donate.paypal.success'),
                'cancelUrl' => route('donate.paypal.error'),
            ))->send();


            if ( $response->isRedirect()) {

                $response->redirect();

            } else {

                return $response->getMessage();

            }
        } catch(Exception $e) {

            return $e->getMessage();

        }
    }

    public function paypalSuccess(Request $request)
    {

        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                return redirect()->back()->with("success","Thank you for your donation of $".$arr_body['transactions'][0]['amount']['total']);
            } else {
                return $response->getMessage();
            }
        } else {
            return redirect()->back()->with("error","Transaction declined");
        }
    }

    public function paypalError()
    {
        return redirect()->back()->with("error","Donation cancelled by user");
    }

    public function paystackGatewayCallback(Request $request){

        $payment_reference = $request->reference_no;

        if(is_null($payment_reference)){

            return redirect()->route("donate")->with([
                'error' =>  "Opps! your donation was not successful."
            ]);

        }else{
            return redirect()->route("donate")->with([
                'success' =>  "Opps! your donation was not successful."
            ]);
        }
    }

}
