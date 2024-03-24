<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = auth()->user();
       // return view('home');
        $posts = Post::orderBy("created_at", "DESC")->limit(3)->get();
       //dd($posts);
       //return view('home');
       return view('home',[
        "posts"=>$posts,"user"=>$user,
       ]);
    }
   
}
