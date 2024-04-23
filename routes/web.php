<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/forus', [App\Http\Controllers\ForUsController::class, 'index'])->name('forus');
Route::get('/packs', [App\Http\Controllers\PacksController::class, 'index'])->name('packs');
Route::get('/interior', [App\Http\Controllers\InteriorController::class, 'index'])->name('interior');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Route::get('/signin', [App\Http\Controllers\SignInController::class, 'index'])->name('signin');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'ProcessPayment'])->name('payment');
Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'index'])->name('contacts');
Route::get('/checkout1', [App\Http\Controllers\StripeController::class, 'session'])->name('checkout1');
//cart
//Route::get('/products', [App\Http\Controllers\ProductsController::class, 'showProducts']);
Route::get('cart', [App\Http\Controllers\ProductsController::class, 'showCartTable']);   
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductsController::class, 'addToCart']);
Route::delete('remove-from-cart', [App\Http\Controllers\ProductsController::class, 'removeCartItem']);
Route::get('clear-cart', [App\Http\Controllers\ProductsController::class, 'clearCart']);
Route::get('checkout', [App\Http\Controllers\ProductsController::class, 'showCheckout']);
Route::post('checkoutDone', [App\Http\Controllers\ProductsController::class, 'checkoutDone']);

Route::post('messageSent', [App\Http\Controllers\ContactsController::class, 'messageSent']);
Route::post('messageSent', [App\Http\Controllers\ContactsController::class, 'messageSent'])->name('messageSent');

//stripe

Route::get('/checkout1', 'App\Http\Controllers\StripeController@checkout')->name('checkout1');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');