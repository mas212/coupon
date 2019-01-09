<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
	protected $limit = 10;
    public function index()
    {
    	$cart = Cart::content();
    	$products = Product::paginate($this->limit);
    	//return view('frontend.home.index')->with('products', $products);
    	return view('frontend.home.index', [
            'data' => $cart,
            'products' => $products
        ]);
    }
}
