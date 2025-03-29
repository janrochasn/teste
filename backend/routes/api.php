<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/
Route::get('/categories', [CategoryController::class, 'listAll']);
Route::get('/products', [ProductController::class, 'list']);
Route::get('/products/{id}', [ProductController::class, 'listByProductId']);
Route::get('/products?category={id}', [ProductController::class, 'listByCategoryId']);
Route::get('/products?search={query}', [ProductController::class, 'listByQuery']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);