<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $table = 'shippings';

    protected $fillable = [
    	'fullname',
    	'user_id',
    	'email',
    	'phone',
    	'city',
    	'state',
    	'country',
    	'fullAddress'
   	];

   	public function user()
   	{
   		return $this->belongsTo('App\User');
   	}
}
