<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LoanTaken;
use App\Models\CalculateLoan;
use App\user;

class LoanController extends Controller
{
  public function SendLoanMoney(Request $request){

    //if($receipt is true)
    $url = "https://api.paystack.co/transfer";
    $fields = [
        'source' => "balance",
        'amount' => $request->amount,
        'recipient' => "RCP_ue5rqonqulysr6p",
        'reason' => "vehicle"
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
    
   
    //this will not work with paystack because i dont have a business account
    $result = curl_exec($ch);
    //echo $result;
    //dd( $result);
  
    return view('Pages.recipient');
 
  }
}
