<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CalculateLoan;
use App\Models\LoanTaken;
use App\User;

class CalculateLoanController extends Controller
{
    public function CalculateLoan(Request $request )
    {
     
          $recepit = LoanTaken::create([
      
            "reference"=> "on5hyz9poe",
            "amount"=>  $request->amount,
            "currency"=> "NGN",
            "source"=> "balance",
             "reason"=>  $request->reason,
             "recipient"=>  $request->recipient,
           ]);
        $CalLoan = CalculateLoan::insert([

            "reason"=> $request->reason,
            "recipient"=>$request->recipient,
            "amount"=> $request->amount,
            "days"=>($request->days) * 30,
            
           ]);

          //  $user = $request->user();

          //  $transaction = LoanTaken::where(['user_id' => $user->id])->first();
   
          //  return $transaction;
   
           return view('Pages.takeloan');

    }
}
