<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Paystack
Route::get('/payment/callback', 'Payment\PaymentController@handleGatewayCallback')->name('/payment/callback');
Route::post('/pay', 'Payment\PaymentController@redirectToGateway')->name('pay');

Route::post('/pay_verify','Payment\PaymentController@pay')->name('pay_verify');



Route::get('/take', function () {
    return view('Pages/takeloan');
});

Route::get('/acc_verify', 'Payment\LoanTransferController@VerifyAccount')->name('acc_verify');
Route::get('/transfer_receipt', 'Payment\LoanTransferController@TransferReceipt')->name('transfer_receipt');
Route::get('/save_receipt', 'Payment\LoanTransferController@SaveReceipt')->name('save_receipt');



Route::post('recipient', function () {
    return view('Pages.recipient');
});