<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class,'home']);
Route::get('/admin', [App\Http\Controllers\HomeController::class,'index']); //admin
Route::get('/viewpr', [App\Http\Controllers\HomeController::class,'viewproduct']);//viewproduct
Route::get('/addpr', [App\Http\Controllers\HomeController::class,'addproduct']); //add product
Route::get('/category', [App\Http\Controllers\HomeController::class,'addcategory']); //add category
Route::get('/allcategory', [App\Http\Controllers\HomeController::class,'allcategory']); //all category
Route::get('/noteproduct', [App\Http\Controllers\HomeController::class,'noteproduct']); //note product
Route::get('/allorders', [App\Http\Controllers\HomeController::class,'allorders']); //all orders


