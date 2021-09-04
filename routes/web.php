<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\companiesController;
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
////INICIO
Route::get('/',[companiesController::class,'index'])->name('companies.index');

 ////PRODUCTOS
Route::get('products',[ProductsController::class,'index'])->name('products.index');
Route::get('products/create',[ProductsController::class,'create'])->name('products.create');
Route::post('products',[ProductsController::class,'store'])->name('products.store');
Route::delete('products/{id}',[ProductsController::class,'destroy'])->name('products.destroy');
Route::get('products/{id}',[ProductsController::class,'show'])->name('products.show');
Route::get('products/edit/{id}',[ProductsController::class,'edit'])->name('products.edit');
Route::put('products/{id}',[ProductsController::class,'update'])->name('products.update');

////COMPAÑIAS

Route::get('companies',[companiesController::class,'index'])->name('companies.index');
Route::get('companies/create',[companiesController::class,'create'])->name('companies.create');
Route::post('companies',[companiesController::class,'store'])->name('companies.store');
Route::delete('companies/{id}',[companiesController::class,'destroy'])->name('companies.destroy');
Route::get('companies/{id}',[companiesController::class,'show'])->name('companies.show');
Route::get('companies/edit/{id}',[companiesController::class,'edit'])->name('companies.edit');
Route::put('companies/{id}',[companiesController::class,'update'])->name('companies.update');
