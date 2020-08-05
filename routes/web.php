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

Route::get('/','PagesController@getViewHomepage') ;

Route::get('/item-list','PagesController@getViewItemList');

Route::get('/homepage','PagesController@getViewHomepage');

Route::get('/cart','PagesController@getViewCart');


Route::get('/checkout','PagesController@getViewCheckout');

Route::get('/product-detail','PagesController@getViewItemDetail');
