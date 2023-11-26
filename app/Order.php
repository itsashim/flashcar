<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\OrderDetail;

class Order extends Model
{
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
