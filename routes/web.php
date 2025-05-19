<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [AuthController::class, 'index'])->name('index');
// Route::get('/',[AuthController::class, 'saveUser'])->name('save-user');
Route::get('/', function(){
    return view('index');
});
