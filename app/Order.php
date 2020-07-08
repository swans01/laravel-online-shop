<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function selectOrder(){
        $orders = Order::orderBy('created_at', 'desc')->get();
        return $orders;
    }
}
