<?php

namespace App\Http\Controllers;

use Cart;
use Auth;
use App\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
    	return view('frontend.checkout.index', [
    		'data' => Cart::content()
    	]);
    }

    public function store(Request $request)
    {
    	Order::createOrder();
        Cart::destroy();
        return redirect()->back();
    }
}
