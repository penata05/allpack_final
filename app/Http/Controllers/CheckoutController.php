<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        // Валидиране на данните от заявката
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // Добавяне на правила за валидация за другите полета
        ]);

        // Запазване на поръчката в базата данни
        $order = new Order();
        $order->name = $validatedData['name'];
        $order->email = $validatedData['email'];
        // Задаване на останалите полета от заявката по нужда
        $order->save();

        // По желание може да се пренасочи потребителя към страница за благодарност
        return redirect()->route('thank-you')->with('success', 'Поръчката е успешно разположена!');
    }
}