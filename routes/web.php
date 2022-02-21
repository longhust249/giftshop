<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [AdminController::class, 'home'])->name('home');
Route::get('product', [AdminController::class, 'product'])->name('product');
Route::get('category/{id}', [AdminController::class, 'category'])->name('category');
Route::get('intro', [AdminController::class, 'intro'])->name('intro');
Route::get('contact', [AdminController::class, 'contact'])->name('contact');
Route::get('blog', [AdminController::class, 'blog'])->name('blog');
Route::get('register', [AdminController::class, 'register'])->name('register');
Route::get('product-detail/{id}', [AdminController::class, 'show'])->name('product.detail');
Route::get('cart', [AdminController::class, 'cart'])->name('cart');
Route::post('cart/add', [AdminController::class, 'addCart'])->name('cart.add');
Route::post('cart/delete', [AdminController::class, 'deleteCart'])->name('cart.delete');

