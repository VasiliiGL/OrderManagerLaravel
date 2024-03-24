<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class AuthController extends Controller
{
    public function index()
    {
        return view("admin.auth.login");
    }


    public function login(Request $request)
    {
        if (auth("web"))
        {
            auth("web")->logout();
        }
        
        $data=$request->validate([
            "name"=>'required|string|min:4|max:30', //|exists:users,name
            'password'=>'required|min:4|max:100'
        ]);

       if (auth("admin")->attempt($data))
       {
         //return redirect()->route('admin.posts.index');
         return redirect()->route('admin.management');

        //return view("admin.management.index");
       }

        return redirect()->route('admin.login')->withErrors(["name"=>"Пользователь не найден. Проверьте данные"]);


    }

    public function logout()
    {
        auth("admin")->logout();
        return redirect()->route('home');
    }
}
