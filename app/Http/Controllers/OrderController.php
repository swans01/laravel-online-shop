<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function ShowOrder(){
        $orders = Order::all();
        return view('order', ['orders' => $orders]);
    }

    public function ShowOrderInfo($product, $total){
        return view('orderInfo', ['product' => $product, 'total' => $total]);
    }

    public function SubmitOrder(Request $request, $product, $total){
        $order = new Order;
        $totalOrder = Order::all();
        $order->code = 111222333 + count($totalOrder);
        $order->product = $product ? $product : "-";
        $order->total = $total ? $total : 0;
        
        
        $order->save();

        return view('orderSuccess', ['product' => $product, 'total' => $total, 'code' => 111222333 + count($totalOrder)]);
    }

    public function DeleteOrder($order_id){
        $order = Order::where('id', $order_id)->first();
        $order->delete();
        return redirect()->route('order');
    }
}
