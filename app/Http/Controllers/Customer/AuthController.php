<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class AuthController extends Controller
{
    public function index()
    {
        return view("customer.auth.login");
    }

    public function login(Request $request)
    {
        
        $data=$request->validate([
            "title"=>'required|string|min:4|max:30', //|exists:users,name
            'password'=>'required|min:3|max:100'
        ]);
      // dd( $data["title"]);

       $idCustomer = Customer::where('title', $data["title"])->value('id');
       //dd($idCustomer);

       if (auth("customer")->attempt($data))
       {
         return redirect()->route('customer.orders.showAll',[ $idCustomer]);
       }

        return redirect()->route('customer.login')->withErrors(["title"=>"Пользователь не найден. Проверьте данные"]);

    }
    public function logout()
    {
        auth("customer")->logout();
        return redirect()->route('home');
    }
}
