<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::post('/contact', [contactController::class, 'store'])->name('contact.store');
Route::get('view-product/{id}', [ProductController::class, 'viewProducts'])->name('view-product');

Route::post('/add-cart/{id}', [CartController::class, 'addCart'])->name('add-cart');
Route::post('delete-cart', [CartController::class, 'deleteCart'])->name('deleteCart');
Route::post('update-cart/{id}', [CartController::class, 'updateCart'])->name('updateCart');

Route::middleware('cart.exists')->group(function () {
    Route::get('cart', function () {
        return view('cart');
    })->name('cart');
});

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::post('register', [AuthController::class, 'register'])->name('register.auth');
Route::post('/login-user', [AuthController::class, 'login'])->name('login.auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// Admin area placeholder
Route::get('/admin', function () {
    return view('admin');
});