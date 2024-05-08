<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PayModeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Protected routes for authenticated users
Route::middleware(['auth', 'verified'])->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Customer routes
    Route::resource('customers', CustomerController::class);

    // Invoice routes
    Route::resource('invoices', InvoiceController::class);

    // PayMode routes
    Route::resource('pay_modes', PayModeController::class);

    // Product routes
    Route::resource('products', ProductController::class);

    // Category routes
    Route::resource('categories', CategoryController::class);

    // Detail routes
    Route::resource('details', DetailController::class);
});


require __DIR__.'/auth.php';
