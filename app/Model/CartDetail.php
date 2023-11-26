<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    protected $table="cart_details";
    protected $fillable=[
        'cart_id','user_id','product_id','quantity','amount','status'
    ];
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
