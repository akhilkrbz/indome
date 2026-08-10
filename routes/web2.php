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
    Route::get('/product-edit/{id}', [Admin::class, 'productEdit'])->name('products.edit');
    Route::post('/product-update/{id}', [Admin::class, 'productUpdate'])->name('products.update');
    Route::get('/product-add-variants/{id}', [Admin::class, 'productAddVariants'])->name('products.add.variants');
    Route::post('/product-variant-store', [Admin::class, 'productVariantStore'])->name('products.variant.store');
    Route::get('/product-variants-list/{id}', [Admin::class, 'productVariantsList'])->name('products.variants.list');
    Route::get('/variant-edit/{id}', [Admin::class, 'variantEdit'])->name('variants.edit');
    Route::post('/variant-update/{id}', [Admin::class, 'variantUpdate'])->name('variants.update');
    Route::get('/product-images-list/{id}', [Admin::class, 'productImagesList'])->name('products.images.list');
    Route::post('/product-image-store/{id}', [Admin::class, 'productImageStore'])->name('products.image.store');
    Route::delete('/product-image-delete/{productId}/{imageId}', [Admin::class, 'productImageDelete'])->name('products.image.delete');
    Route::get('/product-details/{id}', [Admin::class, 'productDetails'])->name('products.details');
    Route::get('/product-enquiries', [Admin::class, 'productEnquiries'])->name('product-enquiries');

    Route::get('/product-image/{product}/{filename}',[Admin::class, 'productImage'])->where('filename', '.*')->name('product.image');

});

