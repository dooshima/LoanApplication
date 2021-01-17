<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\User;
use Paystack;



class PaymentController extends Controller
{
 /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        //return $paymentDetails;
       // dd($paymentDetails);
        // Now you have the payment details,
        if('success' == $paymentDetails['data']['status']){ 
            // $paystackdata = array(
            // $ref_id = $paymentDetails['data']['reference'],
            // $txn_amount = $paymentDetails['data']['amount'] / 100, //convert to Naira
            // $status = $paymentDetails['data']['status'],
            // $channel = $paymentDetails['data'] ['channel'],
            // $amount = $paymentDetails['data'] ['amount'],
            // $paid = $paymentDetails['data']['paid_at'],
            // );

            $paystackdetail = PaystackModel::create([
                'reference' => $paymentDetails['data']['reference'],
                'status' => $paymentDetails['data']['status'],
                'channel' => $paymentDetails['data'] ['channel'],
                'amount' => $paymentDetails['data'] ['amount'],
                'paid' => $paymentDetails['data']['paid_at'],
            ]);

            //dd($paymentDetails);
            return $paystackdetail;
        }

        //credit user wallet


        //save all transaction made 



        //save all payment made

        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


}