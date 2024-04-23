<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// include 'resources/views/checkout.blade.php';


class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout1');
    }

    public function session()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'bgn',
                        'product_data' => [
                            'name' => 'Опаковки от Allpack',
                        ],
                        'unit_amount'  => 500,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout1'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return view ("success");
    }
}