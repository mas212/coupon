<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function index()
    {
    	$cart = Cart::content();
        return view('frontend.cart.index', [
            'data' => $cart
        ]);
    }

    public function addItem($id)
    {
        $product = Product::findOrFail($id);
        $add     = Cart::add([
            'id'        => $product->id,
            'name'      => $product->name,
            'qty'       => 1,
            'price'     => $product->price
        ]);

        if($add){
           return view('frontend.cart.index',[
             'data' => Cart::content()
           ]);
         }
    }

    public function update(Request $request)
    {
        $qty = $request->newQty;
        $rowId = $request->rowID;
        Cart::update($rowId,$qty);
        echo "Cart updated successfully";
    }

    public function destroy($id)
    { 
        Cart::remove($id);
        return back()->with('success_message', 'Item has been removed!');

    }

    public function checkout()
    {
        return Order::createOrder();
    }
}
