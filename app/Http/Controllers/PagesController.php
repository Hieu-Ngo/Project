<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

    public function itemList(){
        return view('item-list');
    }

    public function detail(){
        return view('item-detail');
    }

    public function cart(){
        return view('cart');
    }


    public function checkout(){
        return view('checkout-page');
    }
}
