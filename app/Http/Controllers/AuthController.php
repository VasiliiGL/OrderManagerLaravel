<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $data=$request->validate([
            "name"=>'required|string|min:4|max:30', //|exists:users,name
            'password'=>'required|min:4|max:100'
        ]);

        $user = User::where("name",$request->name)->first();

       if (auth("web")->attempt($data))
       {
         return redirect()->route('home');
       }

        return redirect()->route('login')->withErrors(["name"=>"Пользователь не найден. Проверьте данные"]);


    }

    public function logout()
    {
        auth("web")->logout();
        return redirect()->route('home');
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $data=$request->validate([
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

        ]);

        if($user){
            auth("web")->login($user);
        }

        return redirect()->route('home');


    }
}
