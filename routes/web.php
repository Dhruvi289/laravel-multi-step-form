<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products', [ProductController::class, 'index'])->name('products');
  
Route::get('products/create-step-one', [ProductController::class , 'createStepOne'])->name('products.create.step.one');
Route::post('products/create-step-one', [ProductController::class , 'postCreateStepOne'])->name('products.create.step.one.post');
  
Route::get('products/create-step-two', [ProductController::class , 'createStepTwo'])->name('products.create.step.two');
Route::post('products/create-step-two', [ProductController::class , 'postCreateStepTwo'])->name('products.create.step.two.post');
  
Route::get('products/create-step-three', [ProductController::class , 'createStepThree'])->name('products.create.step.three');
Route::post('products/create-step-three', [ProductController::class , 'postCreateStepThree'])->name('products.create.step.three.post');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
