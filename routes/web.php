<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rutele pentru produse
Route::get('/products', [App\Http\Controllers\ProductController::class, 'getAll']);
Route::get('/products/{categoryId}', [App\Http\Controllers\ProductController::class, 'getProducts']);
Route::get('/product/{productId}', [App\Http\Controllers\ProductController::class, 'getProduct']);

// Rutele pentru categorii
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'getAll']);

Route::get('/', function () {
    return view('welcome');
});
