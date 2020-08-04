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

Route::get('/','PagesController@homepage') ;

Route::get('/item-list','PagesController@itemList');

Route::get('/homepage','PagesController@homepage');

Route::get('/cart','PagesController@cart');


Route::get('/checkout','PagesController@checkout');

Route::get('/product-detail','PagesController@detail');
