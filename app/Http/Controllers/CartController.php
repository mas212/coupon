<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
    	$cart = Cart::content();
        return view('frontend.cart.index', [
            'data' => $cart
        ]);
    }

    public function addItem($id)
    {
        $product = Product::findOrFail($id);
        $add     = Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'qty'       => 1,
            'price'     => $product->price
        ]);

        if($add){
           return view('frontend.cart.index',[
             'data' => Cart::content()
           ]);
         }
    }
}
