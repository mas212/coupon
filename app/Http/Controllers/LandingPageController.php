<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
	protected $limit = 10;
    public function index()
    {
    	$products = Product::paginate($this->limit);
    	return view('frontend.home.index')->with('products', $products);
    }
}
