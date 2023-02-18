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

Route::get('/', function () {
    return view('home');
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('home', [AppController::class, 'home'])->name('home');
Route::get('admin', [AdminController::class, 'home'])->name('admin');
Route::get('insert_product', [AdminController::class, 'insert_product'])->name('insert_product');
Route::post('submit_product', [AdminController::class, 'submit_product'])->name('submit_product');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('submit_register', [AuthController::class, 'submit_register'])->name('submit_register');
Route::post('submit_login', [AuthController::class, 'submit_login'])->name('submit_login');