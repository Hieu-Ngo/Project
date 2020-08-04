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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/item-list', function () {
    return view('item-list');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout-page');
});
Route::get('/product-detail', function () {
    return view('item-detail');
});



