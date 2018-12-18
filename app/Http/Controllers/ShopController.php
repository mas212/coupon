<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
	protected $limit = 10;
    public function index()
    {
    	$products = Product::paginate($this->limit);
    	return view('frontend.product.product')->with([
            'products' => $products
        ]);
    }

    public function show($slug)
    {
    	$product  		= Product::where('slug', $slug)->firstOrFail();
    	return view('frontend.product.detail')->with([
    		'product' 			=> $product
    	]);
    }
}
