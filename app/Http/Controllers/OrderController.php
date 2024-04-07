<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOrderDetailFormRequest;
use App\Models\Changedocument;
use App\Models\ChangedocumentOrder;
use App\Models\Order;
use App\Models\Organization;
use App\Models\User;
use App\Models\UserDetail;
use App\Models\Status;
use App\Models\Designdocument;

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
    $orderdetails = $order->changedocuments;

    $nomenclature = Designdocument::where ('type','чертеж')->orderBy('designation','asc');
    $changedocuments = Changedocument::where('designdocument_id','$nomenclature->id')->paginate(10);
    //dd($order->changedocuments);
    //dd($nomenclature);
    return view('orders.orderdetails',[
        "order" =>$order, "orderdetails" =>$orderdetails,"changedocuments"=>$changedocuments,
    ]);
   }

   public function addorderdetails($id)
   {
    $order = Order::findOrFail($id);

    $nomenclature_id = Designdocument::where ('type','чертеж')->orderBy('designation','asc')->pluck('id');//->orderBy('designation','asc')->paginate(10)->value('id');
    //dd($nomenclature_id);
    $changedocuments = Changedocument::whereIn('designdocument_id',$nomenclature_id)->get();
    
    //dd($changedocuments);


    //$nomenclature = Designdocument::where ('type','чертеж')->orderBy('designation','asc')->paginate(10);
    //$nomenclature = Changedocument::orderBy("designdocument_id", "DESC")->paginate(10);

    $nomenclature = $changedocuments;
    return view('orders.addorderdetails',[
        "order" =>$order, "nomenclature"=>$nomenclature,
    ]);

   }

     
   public function addorderdetailProcess(AddOrderDetailFormRequest $request)
   {
    //dd ($request);
      /* $data=$request->validate([
           "detail"=>'required|string|min:4|max:30',
           "need"=>'required|integer',
       ]);*/

      // $changedocument_id =$request["designdocument_id"];

         $changedocument_order = ChangedocumentOrder::create([
        'changedocument_id' => $request['changedocument_id'],
        'order_id' => $request['order_id'],
        'need' => $request['need'],
      ]);

       $addDetail = ChangedocumentOrder::create($changedocument_order->validated());
       return redirect(route("orders.show"));
   }
/* $data=$request->validate([
            "name"=>'required|numeric|min:170000|max:170999|unique:users,name',
            "lastname"=>'required|string|min:4|max:30',
            "fathername"=>'required|string|min:4|max:30',
            "firstname"=>'required|string|min:4|max:30',
            "jobtitle"=>'required|string|min:4|max:30',
            "organization"=>'required|string|min:4|max:30',
            "workphone"=>'required|numeric',
            "personalphone"=>'required|numeric',
            'email'=>'required|min:4|max:100|email|string|unique:users,email',
            'password'=>'required|min:4|max:100|confirmed'
        ]);

        $user = User::create([
            "name"=>$data["name"],
            'email'=>$data["email"],
            'password'=>bcrypt($data["password"])
        ]);

        $userdetails = UserDetail::create([
            'user_id'=>$user["id"],
            'organization_id'=> '1',
            'lastname'=>$data[ "lastname"],
            'fathername'=>$data["fathername"],
            'firstname'=>$data["firstname"],
            "jobtitle"=>$data["jobtitle"],
            "workphone"=>$data["workphone"],
            "personalphone"=>$data["personalphone"]

        ]);*/


   public function selectorganization()
   {

   }

   public function destroy(string $id)
   {
        $customer=Order::findOrFail($id)->value('customer_id');
        dd($customer);
       Order::destroy($id);
       return redirect(route('home'));
   }
}
