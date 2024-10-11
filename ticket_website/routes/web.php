<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('users.loginPage');
// });

Route::get('/', [UserController::class, 'index'])->name('login');

Route::get('/register', [UserController::class, 'register'])->name('register');
