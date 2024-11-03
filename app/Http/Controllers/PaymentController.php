<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function initiatePayment()
    {
        $response = Http::withBasicAuth(env('MPGS_API_KEY'), '')
            ->post(env('MPGS_API_URL') . "/merchant/" . env('MPGS_MERCHANT_ID') . "/session", [
                "apiOperation" => "CREATE_CHECKOUT_SESSION",
                "order" => [
                    "amount" => 100.00,
                    "currency" => "USD",
                    "id" => uniqid()
                ]
            ]);

        if ($response->successful()) {
            $sessionId = $response['session']['id'];
            return view('payment.checkout', compact('sessionId'));
        }

        return back()->withErrors('Payment initiation failed');
    }
    
    
    
    public function handleCallback(Request $request)
    {
        // Check payment status via MPGS API if needed
        // Confirm transaction and show success or error message
    }
}
