<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrderFormRequest;
use App\Http\Requests\Customer\OrderForm;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Organization;

class OrderController extends Controller
{
    public function index()
    {
      //dd($request);
        //$x=1;
        $x=auth('customer')->id;
        //dd( $x);
        //$orders = Order::orderBy("created_at","DESC")->paginate(3);
   
        $orders = Order::where ('customer_id',$x)->orderBy('number','asc')->paginate(10);
        $customer= Customer::find ($x);
  
 
         return view('customer.orders.index',[
             "orders"=>$orders, "customer"=>$customer, 
         ]);
    }

   // public function showAll(string $id)
    public function showAll()
    {
      //dd($id);
      //  $x=1;
        //dd( $x);
        //$orders = Order::orderBy("created_at","DESC")->paginate(3);
        $customer =auth('customer')->user();

        $orders = Order::where ('customer_id',$customer->id)->orderBy('number','asc')->cursorPaginate(10);;
       // $customer= Customer::find ($id);
//dd($customer);
         return view('customer.orders.index',[
             "orders"=>$orders, "customer"=>$customer,
         ]);
    }
    

    public function createOrderForm($id)
    {
        $organizations= Organization::get();
        //dd($organizations);
        $customer = Customer::where(["id"=>$id])->first();
        //dd( $customer);
        return view('orders.create',[  
            "customer"=>$customer,  "organizations"=>$organizations,
        ]);
    }

   
   /* public function createOrderFormProcess(Request $request)
    {
        $data=$request->validate([
            "customer_id"=>['required'],
            "organization_id"=>['required'],
            "number"=>["required","string"],
            "description"=>["required","string"],
            "thumbnail"=>["file"],
        ]);
        $order = Order::create($data); // попадают только те поля которые указаны в првилах FormRequest
        return redirect(route('customer.orders.index'));

    }*/

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

    public function createOrder()
    {
        $organizations= Organization::get();
        //dd($organizations);
        $customer =auth('customer')->user();
        //dd( $customer);
        return view('customer.orders.create',[  
            "customer"=>$customer,  "organizations"=>$organizations,
        ]);
    }

    public function createOrderFormProcess(OrderForm $request )
    {
        //dd($request);
        $order = Order::create($request->validated()); // попадают только те поля которые указаны в првилах FormRequest

        return redirect(route('customer.orders.showAll','1'));

    }

    public function destroy(string $id)
    {
         $customer=Order::findOrFail($id)->value('customer_id');
         dd($customer);
        Order::destroy($id);
        return redirect(route('home'));
    }


}
