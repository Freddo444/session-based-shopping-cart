<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AuthController::class, 'index'])->name('index');
// Route::get('/',[AuthController::class, 'saveUser'])->name('save-user');
Route::get('/', function(){
    return view('index');
});

Route::post('/contact', [contactController::class, 'store'])->name('contact.store');
Route::get('view-product', function(){
    return view('view');
})->name('view-product');
