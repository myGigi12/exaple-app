<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function add()
    {
        return view('admin.add-product');
    }

    function store(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $category = $request->category_id;


        Product::create([
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'category_id' => $category
        ]);

        return back();
    }
}
