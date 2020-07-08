<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function ShowOrder(){
        $orders = new Order;
        return view('order', ['orders' => $orders->selectOrder()]);
    }
}
