<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalculateLoan;
use App\Models\LoanTaken;
use App\Models\AccumulatedLoan;


use App\user;

use DB;

class LoanPayBackController extends Controller
{

    public function CalculateDefaulters(Request  $request)
    {
        $user = LoanTaken::get('amount')->first();
       
        $gettingData = $user->amount;

        // return $gettingData;
        $defaultPercentage = 0.005; 
        $discount = $gettingData * $defaultPercentage;
        //return  $discount;

        $loanAccum = AccumulatedLoan::create([
            'percentage' =>$defaultPercentage,
            'amount' => $gettingData,
            'amounttobepaid' => $discount
        ]);

        return view('Pages.displayAmount',compact('discount'));
    }

    
    public function RecurringCharges(){
        $user = LoanTaken::all();
       
        $url = "https://api.paystack.co/transaction/charge_authorization";
        $fields = [
          'authorization_code' => "AUTH_pmx3mgawyd",
          'email' => "mail@mail.com",
          'amount' => $loaning->amount
        ];
        $fields_string = http_build_query($fields);
        //open connection
        $ch = curl_init();
        
        //set the url, number of POST vars, POST data
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer sk_test_43aebe0a11ee9212da818504d25ae59888d46c4f",
            "Cache-Control: no-cache",
        ));
        
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        
        //execute post
        $result = curl_exec($ch);
        // echo $result;

        $data = response()->json([ 
            
                "status" => true,
                "message" => "Charge attempted",
                "amount" => 300000,
                "currency"=> "NGN",
                "transaction_date"=> "2020-05-27T11:45:03.000Z",
                "reference" => "cn65lf4ixmkzvda",
                "domain"=> "test",
                "metadata"=> "",
                "gateway_response"=> "Approved",
                "message"=> null,
                "channel"=> "card",
                "ip_address"=> null,
                "log"=> null,
                "fees"=> 14500,   
                "authorization_code"=> "AUTH_pmx3mgawyd",
                "bin" => "408408",
                "last4" => "4081",
                "exp_month" => "12",
                "exp_year"=> "2020",
                "channel" =>"card",
                "card_type" => "visa DEBIT",
                "bank" =>"Test Bank",
                "country_code"=> "NG",
                "brand"=> "visa",
                "reusable"=> true,
                "signature"=> "SIG_2Gvc6pNuzJmj4TCchXfp",
                "account_name"=> null,
                "id"=> 23215815,
                "first_name"=> null,
                "last_name"=> null,
                "email"=> "mail@mail.com",
                "customer_code"=>"CUS_wt0zmhzb0xqd4nr",
                "phone"=> null,
                "metadata"=> null,
                "risk_action"=>"default",                 
                "plan"=> null,
                 "id"=> 696105928
            
            ]);   

            return $data;

    }
}
