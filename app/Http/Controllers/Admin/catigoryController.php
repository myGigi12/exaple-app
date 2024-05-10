<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catigory;
use Illuminate\Http\Request;

class catigoryController extends Controller
{
    function add(){
        return view('admin.add-category');
    }

    function store(Request $request) {
       $name = $request->name;
       $image = $request->image;

       Catigory::create ([
        'name' => $name,
        'image' => $image,

    ]);
    return back();

   }
}
