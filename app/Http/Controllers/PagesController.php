<?php

namespace App\Http\Controllers;

use Illuminate\Http\Reponds;


class PagesController extends Controller

{
  /**
     * Get view of homepage
     *
     *
     *
     * @return respond homepage
     *
  */
    public function getViewHomepage(){
        return view('homepage');
    }


    /**
       * Get view of item list
       *
       * @return respond item-list
       *
    */
    public function getViewItemList(){
        return view('item-list');
    }


    /**
       * Get view of item detail page
       *
       *
       *
       * @return respond item-detail
       *
    */
    public function getViewItemDetail(){
        return view('item-detail');
    }


    /**
       * Get view of cart page
       *
       * @return respond cart
       *
    */
    public function getViewCart(){
        return view('cart');
    }


    /**
       * Get view of checkout page
       *
       * @return Respond checkout-page
       *
    */
    public function getViewCheckout(){
        return view('checkout-page');
    }
}
