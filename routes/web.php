<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/homing', function () {
    return view('Pages.Home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/logining', function () {
    return view('auth.login');
});

//Paystack
Route::get('/payment/callback', 'Payment\PaymentController@handleGatewayCallback')->name('/payment/callback');
Route::post('/pay', 'Payment\PaymentController@redirectToGateway')->name('pay');

Route::post('/pay_verify','Payment\Paym`entController@pay')->name('pay_verify');


Route::get('/acc_verify', 'Payment\LoanTransferController@VerifyAccount')->name('acc_verify');
Route::get('/transfer_receipt', 'Payment\LoanTransferController@TransferReceipt')->name('transfer_receipt');
Route::get('/save_receipt', 'Payment\LoanTransferController@SaveReceipt')->name('save_receipt');

Route::get('/send_money', 'Payment\LoanController@SendLoanMoney')->name('send_money');
Route::get('/calculate_money', 'Payment\CalculateLoanController@CalculateLoan')->name('calculate_money');

Route::get('/calculate_default', 'Payment\LoanPayBackController@CalculateDefaulters')->name('calculate_default');
Route::get('/recurring', 'Payment\LoanPayBackController@RecurringCharges')->name('recurring');

Route::get('/takeloan', function () {
    return view('Pages.takeloan');
});

Route::get('/initiate', function () {
    return view('Pages.Initiate');
});

Route::get('/recipient', function () {
    return view('Pages.recipient');
});
Route::get('/display', function () {
    return view('Pages.displayAmount');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
