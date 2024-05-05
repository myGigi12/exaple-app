<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-page',function(){
    return view('test');

});

Route::get('/steez-page',function(){
    return view('steez');

});

Route::get("/add-post", [PostController::class, 'add'])->name('post.add');
Route::post("/store-post", [PostController::class, 'store'])->name('post.store');

Route::get("/all-post", [PostController::class, 'posts'])->name('all-post');
