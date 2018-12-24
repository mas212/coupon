<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = "order_products";

    protected $fillable = [
    	'order_id',
    	'product_id',
    	'qty',
    	'total'
    ];

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}
