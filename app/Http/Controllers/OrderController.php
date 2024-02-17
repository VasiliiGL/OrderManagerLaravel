<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function index()
   {
$x=1;
   //$orders = Order::orderBy("created_at","DESC")->paginate(3);

   $orders = Order::where ('organization_id',$x)->orderBy('number','asc')->paginate(3);
   $organization= Organization::find ($x);
   //dd( $organization);
    return view('orders.index',[
        "orders"=>$orders, "organization"=>$organization
    ]);
   }

   public function ordersAll()
   {
    $orders = Order::orderBy("created_at","DESC")->paginate(3);

    return view('orders.ordersAll',[
        "orders"=>$orders, 
    ]);
   }

   public function show($id)
   {
    $order = Order::findOrFail($id);
    return view('orders.show',[
        "order" =>$order, 
    ]);
   }



   public function selectorganization()
   {

   }
}
