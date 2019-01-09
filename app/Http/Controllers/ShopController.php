<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
	protected $limit = 10;
    public function index()
    {
        $cart = Cart::content();
    	$products = Product::paginate($this->limit);
        return view('frontend.product.product', [
            'data' => $cart,
            'products' => $products
        ]);
    }

    public function show($slug)
    {
        $cart = Cart::content();
    	$product  		= Product::where('slug', $slug)->firstOrFail();
    	return view('frontend.product.detail', [
           'data' => $cart,
            'product' => $product 
        ]);
    }
}
