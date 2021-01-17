<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanSaving;
use App\Models\InitateRecept;

use App\User;

class LoanTransferController extends Controller
{
  
    public function VerifyAccount (Request $request)
    {

        $VerifyAccountDetails = LoanSaving::create([
            'account_number' => $request->account_number,
            'account_name' => $request->account_name,
            'bank_code' => $request->bank_code
        ]);

        // $user = $request->user();

        // $transaction = LoanSaving::where(['user_id' => $user->id])->first();

        // return $transaction;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/bank/resolve?account_number=".rawurlencode($request->account_number)."&bank_code=".rawurlencode($request->bank_code),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer sk_test_43aebe0a11ee9212da818504d25ae59888d46c4f",
            "Cache-Control: no-cache",
            ),
        ));
       

        $response = curl_exec($curl);
        $err = curl_error($curl);


        curl_close($curl);
        if ($err) {
            echo ("cURL Error #:" . $err);
        } else {
            $result = json_decode($response);
           // echo $response;

            $url = "https://api.paystack.co/transferrecipient";
            $fields = [
              'type' => "nuban",
              'name' => $request->account_name,
              'account_number' => $request->account_number,
              'bank_code' => $request->bank_code,
              'currency' => "NGN"
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
            //echo $result;
            // return this->SaveReceipt($result);
            
            return view('Pages.recipient',compact('result') );

            }
    

        if($verify){
            $account_name = $request->account_name;
            echo ($account_name);

            
        }

    }

 
}
