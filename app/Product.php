<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
    	return money_format('%i', $this->price / 100);
    }

    public function scopeMightAlsoLike($query)
    {
    	return $query->inRandomOrder()->take(4);
    }

    public function orderDetail()
    {
        return $this->hasMany('App\OrderProduct','product_id');
    }

    public function categories() {
        return $this->belongsToMany('App\Categories', 'pro_cat');
    }
}
