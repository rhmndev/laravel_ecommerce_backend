<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//register seller
Route::post('/seller/register', [App\Http\Controllers\Api\AuthController::class, 'registerSeller']);

// login
Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

//logout
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

//register buyer/user
Route::post('/buyer/register', [App\Http\Controllers\Api\AuthController::class, 'registerBuyer']);

//stote category
Route::post('/seller/category', [App\Http\Controllers\Api\CategoryController::class, 'store'])->middleware('auth:sanctum');

//get all categories
Route::get('/seller/categories', [App\Http\Controllers\Api\CategoryController::class, 'index'])->middleware('auth:sanctum');

//get all products
Route::get('/seller/products', [App\Http\Controllers\Api\ProductController::class, 'index'])->middleware('auth:sanctum');

//products
Route::apiResource('/seller/products', App\Http\Controllers\Api\ProductController::class)->middleware('auth:sanctum');

// update products
Route::post('/seller/products/{id}', [App\Http\Controllers\Api\ProductController::class, 'update'])->middleware('auth:sanctum');

//address
Route::apiResource('/buyer/addresses', App\Http\Controllers\Api\AddressController::class)->middleware('auth:sanctum');

//order
Route::post('/buyer/orders', [App\Http\Controllers\Api\OrderController::class, 'createOrder'])->middleware('auth:sanctum');

//store
Route::get('/buyer/stores', [App\Http\Controllers\Api\StoreController::class, 'index'])->middleware('auth:sanctum');

//product by store
Route::get('/buyer/stores/{id}/products', [App\Http\Controllers\Api\StoreController::class, 'productByStore'])->middleware('auth:sanctum');
