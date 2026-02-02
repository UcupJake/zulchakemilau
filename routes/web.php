<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');;

// Route::get('/products', function () {
//     return view('products');
// })->name('products');

Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
