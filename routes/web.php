<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ShopController;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', 'App\Http\Controllers\LandingPageController@index')->name('landing-page');

Route::get('/shop', 'App\Http\Controllers\ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'App\Http\Controllers\ShopController@show')->name('shop.show');



Route::get('/cart','App\Http\Controllers\CartController@index')->name('cart.index');
Route::post('/cart','App\Http\Controllers\CartController@store')->name('cart.store');
Route::delete('/cart/{product}','App\Http\Controllers\CartController@destroy')->name('cart.destroy');

Route::get('empty', function() {
    Cart::destroy();
});


Route::view('/checkout', 'checkout');
Route::view('thankyou', 'thankyou');
