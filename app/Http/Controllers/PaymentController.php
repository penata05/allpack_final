<?php

// app/Http/Controllers/StripeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController extends Controller
{
    public function showPaymentForm()
    {
        return view('payment');
    }

    public function processPayment(Request $request)
    {
        // Initialize Stripe with your secret key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create a PaymentIntent (you can customize this part)
        $paymentIntent = PaymentIntent::create([
            'amount' => 1000, // Amount in cents (e.g., $10.00)
            'currency' => 'usd',
        ]);
       // $paymentIntent->

        return view('payment_success', ['clientSecret' => $paymentIntent->client_secret]);
    }
    public function successPayment()
    {
        return view('payment-success');
    }
}
