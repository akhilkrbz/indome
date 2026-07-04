<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//Staff Login
Route::get('/login', [AuthController::class, 'staffLogin']);
Route::post('/login-validate', [AuthController::class, 'loginValidate'])->name('login.validate');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});

