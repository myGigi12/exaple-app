<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function add() {
        return view('add-post');

    }

    function store(Request $request) {
        $name = $request->name;
        $content = $request->content;

        Post::create ([
            'name' => $name,
            'content' => $content,
            'likes' => 0,
            'hates' => 0,
        ]);
        return back();

    }

    function posts() {
        $posts = Post::all();

        return view('all-posts', compact('posts'));

    }

    

}
