<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [HomeController::class, 'contactStore'])->name('contact.store');





include(base_path('routes/web2.php'));