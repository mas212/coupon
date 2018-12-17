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
    	return view('products', $products);
    }

    public function show($slug)
    {
    	$product  		= Product::where('slug', $slug)->firstOrFail();

    	$other_product 	=  Product::where('slug', '!=', $slug)->otherProduct()->get();
    	return view('frontend.product.detail')->with([
    		'product' 			=> $product,
    		'other_product' 	=> $other_product
    	]);
    }
}
