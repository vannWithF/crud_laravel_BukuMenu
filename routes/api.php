<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::post('/products', [ProductController::class, 'create']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);
Route::get('/products', [ProductController::class, 'get']);
Route::put('/update/{id}', [ProductController::class, 'update']);

