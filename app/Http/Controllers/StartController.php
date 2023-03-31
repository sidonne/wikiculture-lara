<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartController extends Controller
{

    public function index()
    {

        return view('startpage');

    }

    public function getResult(Request $request){

        $search = $request-> input('search');
        if (strlen($search)>0) {

            $posts =  Post::where('title', 'like', "%{$search}%")->get();
            // return $posts;
            return view('post.index', compact('posts'));

        }
        return "Invalid parameters for search ";
    }

}
