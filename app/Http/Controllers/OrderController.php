<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Organization;
use App\Models\User;
use App\Models\UserDetail;

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

   public function ordersorganization()
   {
    $user = auth()->user();
    //dd($user->id);
    $usersDetail = UserDetail::where(["id"=>$user->id])->first();
    //dd($usersDetail);

    $organizationuser =  $usersDetail->organization_id;
   // dd($organizationuser);

   // $organization = Organization::where(["id"=>$id])->first();
    $orders = Order::where ('organization_id', $organizationuser)->orderBy('number','asc')->paginate(3);

   // dd( $orders);
    return view('orders.ordersAll',[
        "orders"=>$orders, "user"=>$user,
    ]);
   }


   public function show($id)
   {
    $order = Order::findOrFail($id);
    return view('orders.show',[
        "order" =>$order, 
    ]);
   }

   public function nomenclature($id)
   {
    $order = Order::findOrFail($id);
    return view('orders.show',[
        "order" =>$order, 
    ]);
   }



   public function selectorganization()
   {

   }

   public function destroy(string $id)
   {
        $customer=Order::Order::findOrFail($id)->value('customer_id');
        dd($customer);
       Order::destroy($id);
       return redirect(route('home'));
   }
}
