<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OrderFormRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Organization;
use App\Models\Post;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $orders = Order::orderBy("created_at","DESC")->paginate(3);

    return view('admin.orders.index',[
        "orders"=>$orders, 
    ]);

   // return view("admin.orders.index");

    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // ПЕРЕХОД НА ФОРМУ - СОЗДАНИЕ ЗАКАЗА
    {
        $organizations= Organization::pluck('title');
        $customers= Customer::pluck('title');
        return view('admin.orders.create',[
            "organizations"=>$organizations,
            "customers"=>$customers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderFormRequest $request) //СОЗДАНИЕ ЗАКАЗА
    {
        $order = Order::create($request->validated()); // попадают только те поля которые указаны в првилах FormRequest
        return redirect(route('admin.orders.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
       Order::destroy($id);
        return redirect(route('admin.orders.index'));
    }
}
