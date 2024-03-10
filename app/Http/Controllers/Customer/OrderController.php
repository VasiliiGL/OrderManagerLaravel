<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Organization;

class OrderController extends Controller
{
    public function index()
    {
      //dd($request);
        $x=1;
        //dd( $x);
        //$orders = Order::orderBy("created_at","DESC")->paginate(3);
   
        $orders = Order::where ('customer_id',$x)->orderBy('number','asc')->paginate(3);
        $customer= Customer::find ($x);
  
 
         return view('customer.orders.index',[
             "orders"=>$orders, "customer"=>$customer, 
         ]);
    }

    public function showAll(string $id)
    {
      //dd($id);
      //  $x=1;
        //dd( $x);
        //$orders = Order::orderBy("created_at","DESC")->paginate(3);

        $orders = Order::where ('customer_id',$id)->orderBy('number','asc')->paginate(3);
        $customer= Customer::find ($id);
//dd($customer);
         return view('orders.index',[
             "orders"=>$orders, "customer"=>$customer,
         ]);
    }
    

    public function createOrderForm($id)
    {
        $organizations= Organization::pluck('title');
        //dd($organizations);
        $customer = Customer::where(["id"=>$id])->first();
        //dd( $customer);
        return view('orders.create',[  
            "customer"=>$customer,  "organizations"=>$organizations,
        ]);
    }

   
    public function createOrderFormProcess(Request $request)
    {
        $data=$request->validate([
            "customer"=>'required|string|min:4|max:30',
            "organization"=>'required|string|min:4|max:30',
            "number"=>["required","string"],
            "description"=>["required","string"],
            "thumbnail"=>["required","file"],
        ]);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        /*$post = Post::where(["id"=>$id])->first();
        if($post)
        {
            abort(404);
        }*/
       
        return view('orders.show',[
            "order"=>$order,
        ]);
    }


}
