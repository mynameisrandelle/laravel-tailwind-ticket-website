<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('users.loginPage');
// });

Route::get('/', [UserController::class, 'loginView'])->name('login');

Route::get('/register', [UserController::class, 'registerView'])->name('register');

Route::get('/dashboard', [UserController::class, 'ticketDashboard'])->name('dashboard');


Route::post('/register', [UserController::class, 'registerValidate']);

Route::post('/', [UserController::class, 'loginValidate']);

Route::post('/logout', [UserController::class, 'logout'])->name('logout');