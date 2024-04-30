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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   public function indexOrderdetails($id)
   {
    
    $order = Order::findOrFail($id);

    $changedocument_orders = ChangedocumentOrder::where ('order_id',$id)->orderBy("created_at","DESC")->paginate(10);

    $changedocuments = Changedocument::where('designdocument_id','$nomenclature->id')->paginate(10);

    return view('orders.indexOrderdetails',[
        "order" =>$order, "changedocument_orders" =>$changedocument_orders,
    ]);
   }

   public function createOrderdetails($id)
   {
        $order = Order::findOrFail($id);

        $nomenclature_id = Designdocument::where ('type','чертеж')->orderBy('designation','asc')->pluck('id');//->orderBy('designation','asc')->paginate(10)->value('id');

        $changedocuments = Changedocument::whereIn('designdocument_id',$nomenclature_id)->get();

        $nomenclature = $changedocuments;
        return view('orders.addorderdetails',[
            "order" =>$order, "nomenclature"=>$nomenclature,
        ]);
   }

     
   public function createOrderdetailProcess(Request $request) //создать
   {
    $data=$request->validate([
        "order_id"=>'required',
        "changedocument_id"=>'required',
        "need"=>'required|integer',
    ]);

    $nomenclature=Order::findOrFail($request['order_id'])->changedocuments;

    $order=Order::findOrFail($data['order_id']);

    $changedocument_order=ChangedocumentOrder::findOrFail($request['changedocument_id']);

 /*   foreach($nomenclature as $pozition)
    {
        if(($pozition->designdocument_id)==$request['changedocument_id'])
        {
           // dd($pozition->designdocument_id);

            $new_need=$request['need']+$changedocument_order->need;

           // dd( $new_need);

            $changedocument_order->update([
                'need' => $request['need'] +$changedocument_order->need ,


            ]);
        }
        else {
            //dd($changedocument_order);
           
        }
    
    }*/

      // $changedocument_id =$request["designdocument_id"];

      
        $changedocument_order = ChangedocumentOrder::create([
        'changedocument_id' => $request['changedocument_id'],
        'order_id' => $request['order_id'],
        'need' => $request['need'],
        ]);

        
      $order_id = $request['order_id'];

      // $addDetail = ChangedocumentOrder::create($changedocument_order->validated());
       return redirect(route("nomenclature", $order_id));
   }

   public function storeOrderdetails(Request $request) //добавить
   {
       
   }

   public function editOrderdetails($id) // изменить
   {
       
   }

   public function updateOrderdetails(Request $request, $id) // обновить
   {
       
   }

   public function destroyOrderdetails( $id) // удалить
   {
       
   }






//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

   public function destroyPozition(string $id)
   {

     
   }

}
