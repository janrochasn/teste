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
Route::get('/products', [ProductController::class, 'list'])->middleware('auth:sanctum');
Route::get('/products/{id}', [ProductController::class, 'listByProductId'])->middleware('auth:sanctum');
Route::get('/products?category={id}', [ProductController::class, 'listByCategoryId'])->middleware('auth:sanctum');
Route::get('/products?search={query}', [ProductController::class, 'listByQuery'])->middleware('auth:sanctum');
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/login', function(){return response()->json(['message' => 'Acesso não autorizado.'], 401);})->name('login');