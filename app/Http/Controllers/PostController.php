<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    //public function show() {
       //$post = Post::all(); 

        //return view ('posts.show',['post'=>$post[0]]);

public function index(){
     $posts = Post::latest()->get();
     return view('posts.index', ['posts' => $posts]);
}

public function show($id){
    return view ('posts.show', [
        'post' => Post:: findOrFail($id)
    ]);
}
}
