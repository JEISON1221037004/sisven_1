<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CustomerController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Rutas API para las entidades

// Rutas API para las entidades
Route::apiResource('customers', CustomerController::class);
Route::apiResource('invoices', InvoiceController::class);
Route::apiResource('pay_modes', PayModeController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('details', DetailController::class);