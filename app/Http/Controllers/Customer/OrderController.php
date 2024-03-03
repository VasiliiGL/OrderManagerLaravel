<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Organization;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

         return view('customer.orders.index',[
             "orders"=>$orders, "customer"=>$customer,
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
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



  /*  public function show(string $id)
    {
        dd($id);
          $x=1;
          //dd( $x);
          //$orders = Order::orderBy("created_at","DESC")->paginate(3);
     
          $orders = Order::where ('customer_id',$x)->orderBy('number','asc')->paginate(3);
          $customer= Customer::find ($x);
   
           return view('customer.orders.index',[
               "orders"=>$orders, "customer"=>$customer
           ]);
      }*/

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
