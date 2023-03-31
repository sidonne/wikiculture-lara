<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{

    public function dashboard(){

        $posts = Post::with('category')->get();

        return view ('dashboard');
    }

    public function store(Request $request)
    {

        $search = $request->input('search');

        $posts = Post::where('title','=',$search)->get();

        return view('post.index',compact('posts'));

    }
    
    public function edit(Request $request)
    {

        $search = $request->input('search');

        $result = Post::where('title','=',$search)->get();

        return view('home',compact('result'));

    }

    public function delete()
    {

    }
    public function show()
    {

    }

}
