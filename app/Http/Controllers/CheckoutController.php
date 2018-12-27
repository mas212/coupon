<?php

namespace App\Http\Controllers;

use Cart;
use Auth;
use App\Order;
use App\Shipping;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
    	return view('frontend.checkout.index');
    }

    public function store(Request $request)
    {
        $shipping               = new Shipping;
        $user_id                = Auth::user()->id;
        $shipping->fullname     = $request->fullname;
        $shipping->email        = $request->email;
        $shipping->phone        = $request->phone;
        $shipping->city         = $request->city;
        $shipping->state        = $request->state;
        $shipping->country      = $request->country;
        $shipping->fullAddress  = $request->fullAddress;
        $shipping->user_id      = $user_id;
        $shipping->save();
        //process cart 
    	//Order::createOrder();
        //clear cart
        //Cart::destroy();
        return redirect()->route('product');
    }
}
