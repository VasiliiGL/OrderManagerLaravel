<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function index()
   {
    $orders = Order::orderBy("created_at","DESC")->paginate(3);
    return view('orders.index',[
        "orders"=>$orders,
    ]);

   }
}
