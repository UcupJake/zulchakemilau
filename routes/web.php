<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LandingPageController;


Route::get('/', function () {
    return view('welcome');
})->name('home');;

// Route::get('/products', function () {
//     return view('products');
// })->name('products');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
// Rute untuk Admin (admin.website.com)
Route::domain('admin.zulchakemilau.test')->group(function () {
    
    // Halaman Login Admin
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AuthController::class, 'login']);

    // Area yang harus login dulu
    Route::middleware(['auth', 'is_admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        // Rute admin lainnya...
    });
});

// Rute untuk User Utama (website.com)
Route::domain('zulchakemilau.test')->group(function () {
    Route::get('/', [LandingPageController::class, 'index']);
    // Rute user lainnya...
});
