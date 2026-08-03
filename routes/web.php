<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [HomeController::class, 'contactStore'])->name('contact.store');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/products-details/{id}', [HomeController::class, 'productDetails'])->name('view-product.details');


Route::get('/send-mail', [HomeController::class, 'sendMail'])->name('send-mail');




include(base_path('routes/web2.php'));