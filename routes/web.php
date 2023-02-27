<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('admin', [AdminController::class, 'home'])->name('admin');



Route::get('shop/{id}', [AppController::class, 'shop'])->name('shop');
Route::get('shop', [AppController::class, 'shop'])->name('shop');
Route::post('shop', [AppController::class, 'shop'])->name('shop');



Route::get('insert_product', [AdminController::class, 'insert_product'])->name('insert_product');
Route::post('submit_product', [AdminController::class, 'submit_product'])->name('submit_product');
Route::get('allproducts', [AdminController::class, 'allproducts'])->name('allproducts');
Route::get('edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product');
Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');
Route::patch('update_product/{id}', [AdminController::class, 'update_product'])->name('update_product');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('cart', [AppController::class, 'cart'])->name('cart');
Route::get('wishlist', [AppController::class, 'wishlist'])->name('wishlist');
Route::post('submit_register', [AuthController::class, 'submit_register'])->name('submit_register');
Route::post('submit_login', [AuthController::class, 'submit_login'])->name('submit_login');
Route::post('add_favourite/{product}', [AppController::class, 'add_favourite'])->name('add_favourite');
Route::post('add_to_cart/{product}', [AppController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('update_cart/{cart_id}/{quantity}', [AppController::class, 'update_cart'])->name('update_cart');
Route::get('removeCartItem/{cart_id}', [AppController::class, 'removeCartItem'])->name('removeCartItem');
Route::get('checkout', [AppController::class, 'checkout'])->name('checkout');
Route::post('submit_order', [AppController::class, 'submit_order'])->name('submit_order');
Route::get('order_details/{id}', [AppController::class, 'order_details'])->name('order_details');
Route::get('orders', [AppController::class, 'orders'])->name('orders');
Route::get('product_details/{id}', [AppController::class, 'product_details'])->name('product_details');
Route::get('getproductdata', [AdminController::class, 'getproductdata'])->name('getproductdata');
Route::get('getproductsalerate', [AdminController::class, 'getproductsalerate'])->name('getproductsalerate');