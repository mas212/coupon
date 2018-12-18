<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
    	$products = Product::get();
    	return view('frontend.cart.index')->with([
    		'products' => $products
    	]);
    }

    public function store(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price)
        	->associate('App\Product');

        return redirect()->route('cart');
    }

    public function destroy($id)
    {
    	Cart::remove($id);
    	return redirect()->back();
    }
}
