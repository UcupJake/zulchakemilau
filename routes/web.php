<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');;

// Route::get('/products', function () {
//     return view('products');
// })->name('products');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Route::prefix('admin')->group(function () {
//     Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
//     Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

//     Route::middleware('auth:admin')->group(function () {
//         Route::get('dashboard', function () {
//             return view('admin.dashboard');
//         })->name('admin.dashboard');
//     });
// });

// Rute untuk Admin (admin.website.com)
// Route::domain('zulchakemilau.test')->group(function () {
    
//     // Halaman Login Admin
//     Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('login', [AuthController::class, 'login']);

//     // Area yang harus login dulu
//     Route::middleware(['auth', 'is_admin'])->group(function () {
//         Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
//         // Rute admin lainnya...
//     });
// });

// // Rute untuk User Utama (website.com)
// Route::domain('zulchakemilau.test')->group(function () {
//     Route::get('/', [LandingPageController::class, 'index']);
//     // Rute user lainnya...
// });
