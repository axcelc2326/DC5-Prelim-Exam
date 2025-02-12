<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return inertia('Main');
});

Route::get('categories', [CategoryController::class, 'index']);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{category}', [ProductController::class, 'index']);
