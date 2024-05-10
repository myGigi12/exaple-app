<?php

use App\Http\Controllers\Admin\catigoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/add-post', [PostController::class, 'add'])->name('add-post');
Route::get('/all-post', [PostController::class, 'store'])->name('all-post');
Route::get('/post.store', [PostController::class, 'store'])->name('post.store');

Route::get('/message', [MessageController::class, 'message'])->name('message');
Route::post('/all-message', [MessageController::class, 'message'])->name('message');
Route::post('/message.store', [MessageController::class, 'store'])->name('message.store');


Route::prefix('admin')->group(function () {
    Route::get('/add-category', [CatigoryController::class, 'add'])->name('admin.category.add');
    Route::post('/store.category', [CatigoryController::class, 'store'])->name('admin.category.store');

    Route::get('/add-product', [ProductController::class, 'add'])->name('admin.product.add');
    Route::post('/store.product', [ProductController::class, 'store'])->name('admin.product.store');
});

require __DIR__.'/auth.php';




