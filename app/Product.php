<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function presentPrice()
    {
    	return money_format('%i', $this->price / 100);
    }

    public function scopeOtherProduct($query)
    {
    	return $query->inRandomOrder()->take(4);
    }
}
