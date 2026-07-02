<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Staff Login
Route::get('/staff-login', [AuthController::class, 'staffLogin']);
Route::post('/login-validate', [AuthController::class, 'loginValidate'])->name('login.validate');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
