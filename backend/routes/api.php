<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::controller(CartController::class)->group(function () {
    Route::post('cart/add',  'add');
    Route::get('cart/{session}',  'show');
    Route::put('cart/{cart_item}',  'update');
    Route::delete('cart/{cart_item}',  'remove');
});


Route::controller(ProductController::class)->group(function () {
    Route::get('products', 'index');
    Route::get('products/{slug}', 'show');
});



Route::controller(OrderController::class)->group(function () {
    Route::post('orders', 'store');
});


Route::controller(ContactController::class)->group(function () {
    Route::post('contact', 'store');
    Route::get('/messages','index');
});


Route::controller(CategoryController::class)->group(function () {
    Route::get('categories', 'index');
    Route::get('categories/{slug}', 'show'); 
});