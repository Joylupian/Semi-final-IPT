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

Route::get('/',[App\Http\Controllers\SellerController::class,'index']);
Route::get('seller-list-show',[App\Http\Controllers\SellerController::class,'show']);
Route::get('create-seller',[App\Http\Controllers\SellerController::class,'create']);
Route::post('store-seller',[App\Http\Controllers\SellerController::class,'store']);

