<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartControlller;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AuthController::class, 'index'])->name('index');
// Route::get('/',[AuthController::class, 'saveUser'])->name('save-user');
Route::get('/', [ProductController::class, 'index'])->name('index');

Route::post('/contact', [contactController::class, 'store'])->name('contact.store');
Route::get('view-product/{id}', [ProductController::class, 'viewProducts'])->name('view-product');

Route::post('/add-cart/{id}', [CartControlller::class, 'addCart'])->name('add-cart');
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('register', function(){
    return view('register');
})->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.auth');
Route::post('/login-user', [AuthController::class, 'login'])->name('login.auth');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('delete-cart', [CartControlller::class, 'deleteCart'])->name('deleteCart');


