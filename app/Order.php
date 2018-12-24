<?php

namespace App;
use Auth;
use Cart;
use App\OrderProduct;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total'];
    
    public function orderProducts()
    {
    	return $this->belongsToMany('App\Product');
    }

    public function orderProductDetail()
    {
    	return $this->hasMany('App\OrderProduct', 'order_id', 'order_product_id');	
    }


    public static function createOrder()
    {
    	$user 		= Auth::user();
    	//process insert order
    	$order 		= $user->orders()->create([
    		'total' => Cart::total()
    	]);

    	//process insert data to order product
    	foreach (Cart::content() as $item) {
            $order_detail               = new OrderProduct;
            $order_detail->order_id     = $order->id;
            $order_detail->product_id   = $item->id;
             $order_detail->qty         = $item->qty;
             $order_detail->total       = $item->total;
             $order_detail->save();
    	}
    	//cart empty
    	Cart::destroy();
    }
}
