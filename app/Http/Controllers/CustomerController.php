<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showLoginform()
    {
        return view("auth.customerlogin");
    }

    public function login(Request $request)
    {
        $data=$request->validate([
            "title"=>'required|string', 
            'password'=>'required|min:4|max:100'
        ]);
       if (auth("web")->attempt($data))
       {
         return redirect()->route('home');
       }
        return redirect()->route('customer.login')->withErrors(["name"=>"Пользователь не найден. Проверьте данные"]);
    }

    public function logout()
    {
        auth("web")->logout();
        return redirect()->route('home');
    }

    public function showRegisterForm()
    {
        return view("auth.customerregister");
    }

    public function register(Request $request)
    {
        $data=$request->validate([
            "title"=>'required|string',
            "adress"=>'required|string',
            'email'=>'required|min:4|max:100|email|string|unique:users,email',
            "phone"=>'required|numeric',
            "description"=>'required|string',
            'password'=>'required|min:4|max:100|confirmed'
        ]);

        $customer = Customer::create([
            "title"=>$data["title"],
            'adress'=>$data["adress"],
            'email'=>$data["email"],
            "phone"=>$data["phone"],
            "description"=>$data["description"],
            'password'=>bcrypt($data["password"])
        ]);


        /*if($customer){
            auth("web")->login($customer);
        }*/

        return redirect()->route('home');


    }


}
