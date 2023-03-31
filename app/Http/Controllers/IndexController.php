<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\StartController;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {

        $posts = Post::with('category')->get();

        return view('post.index', compact('posts'));

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
