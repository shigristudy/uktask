<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function orderdetails(){
        return $this->hasOne(OrderDetail::class,'order_id');
    }

    public function orderitems(){
        return $this->hasOne(OrderItem::class,'order_id');
    }
}

// this is the relationship of different tables of order