<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index()
    {
    	$products = Product::mightAlsoLike()->get();
    	return view('frontend.cart.index')->with([
    		'products' => $products
    	]);
    }

    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)
        	->associate('App\Product');

        return redirect()->route('cart.index');
    }

    public function destroy($id)
    {
    	Cart::remove($id);
    	return redirect()->back();
    }
}
