<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("created_at", "DESC")->paginate(3);
       return view('posts.index',[
        "posts"=>$posts,
       ]);
    }
    
    public function show($id)
    {
        $post = Post::findOrFail($id);
        /*$post = Post::where(["id"=>$id])->first();
        if($post)
        {
            abort(404);
        }*/
       
        return view('posts.show',[
            "post"=>$post,
        ]);
    }
}
