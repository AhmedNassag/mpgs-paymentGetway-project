<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/payment', [PaymentController::class, 'initiatePayment']);
Route::get('/payment/callback', [PaymentController::class, 'handleCallback']);