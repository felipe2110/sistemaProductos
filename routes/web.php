<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('products',[ProductsController::class,'index'])->name('products.index');
Route::get('products/create',[ProductsController::class,'create'])->name('products.create');
Route::post('products',[ProductsController::class,'store'])->name('products.store');
Route::delete('products/{id}',[ProductsController::class,'destroy'])->name('products.destroy');
Route::get('products/{id}',[ProductsController::class,'show'])->name('products.show');
Route::get('products/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
Route::put('products/{id}',[ProductsController::class,'update'])->name('products.update');
