<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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
