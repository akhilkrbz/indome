<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


//Staff Login
Route::get('/login', [AuthController::class, 'staffLogin']);
Route::post('/login-validate', [AuthController::class, 'loginValidate'])->name('login.validate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/contacts-list', [Admin::class, 'contactList'])->name('contacts.list');
    Route::get('/categories-list', [Admin::class, 'categoryList'])->name('categories.list');
    Route::post('/category-add', [Admin::class, 'categoryAdd'])->name('category.add');
    Route::post('/sub-category-add', [Admin::class, 'subCategoryAdd'])->name('sub-category.add');
    Route::get('/products-list', [Admin::class, 'productList'])->name('products.list');
    Route::get('/product-add', [Admin::class, 'productAdd'])->name('products.add');
    Route::post('/product-store', [Admin::class, 'productStore'])->name('products.store');
    Route::get('/product-add-variants/{id}', [Admin::class, 'productAddVariants'])->name('products.add.variants');

});

