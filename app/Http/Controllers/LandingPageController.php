<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
	protected $limit = 10;
    public function index(Request $request)
    {
    	$cart = Cart::content();
    
        if(isset($request->price)){
            $price = $request->price;
            $products = Product::explode(',', $request->price)->get();
            response()->json($products);
            return redirect()->back();            
        }else{
            $products = Product::paginate($this->limit);
            return view('frontend.home.index', [
            'data' => $cart,
            'products' => $products
        ]);
        }
    }
}
