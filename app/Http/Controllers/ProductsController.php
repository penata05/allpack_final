<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opakovki;
use App\Models\Order;
use App\Models\OrderItem;

class ProductsController extends Controller
{
    public function showCartTable()
    {
        $products = Opakovki::all();
        //var_dump(session()->get('cart'));

        return view('cart', compact('products'));
    }
    public function addToCart($id)
    {
        $product = Opakovki::find($id);

        if (!$product) {

            abort(404);
        }

        $cart = session()->get('cart');

        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "photo" => $product->image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->image
        ];

        session()->put('cart', $cart);
        if (request()->wantsJson()) {
            return response()->json(['message' => 'Product added to cart successfully!']);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function removeCartItem(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back();
    }
    
    public function showProducts()
    {
        $products = Opakovki::all();
        return view('welcome', compact('products'));
    }

    public function showCheckout()
    {
        return view('checkout');        
    }

    public function checkoutDone(Request $request)
    {
        $cart = session()->get('cart');
        $order = new Order;
        $order->first_name = $request->firstName;
        $order->last_name = $request->lastName;
        $order->email = $request->email != NULL ? $request->email : "";
        $order->country = $request->country;
        $order->state = $request->state;
        $order->address = $request->address;
        $order->zipcode = $request->zipCode;
        $order->save();

        foreach ($cart as $id => $product) {
            $order_item = new OrderItem;
            $order_item->order_id = $order->id;
            $order_item->item_id = $id;
            $order_item->quantity = $product['quantity'];
            $order_item->save();
        }

        return view('checkout1');
    }
   
}