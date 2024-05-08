<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function message() {
        return view('message');

    }

    function store(Request $request){
        $sender = $request->sender;
        $message = $request->message;
        $reciever = $request->receiver;

        post::create ([
            'sender' => $sender,
            'receiver' => $reciever,
            'message' => $message,

        ]);
        return back();

    }

    function posts() {
        $posts = Post::all();

        return view('all-posts', compact('posts'));

    }
}
