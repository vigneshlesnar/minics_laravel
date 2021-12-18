<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JuteController;
use App\Http\Controllers\LenoController;

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

Route::get('/about', function () {
  return view('about');
});

Route::get('/contact', function () {
  return view('contact');
});
Route::get('/product', function () {
  return view('product');
});
Route::get('/why-us', function () {
  return view('why');
});

Route::get('profile', function () {
  return view('profile');
});
Auth::routes();

Route::get('login', function () {
  return view('login');
});
Route::post('/login',[UserController::class,'login']);

Route::get('/products',[ProductController::class,'product']);
Route::get('/product_detail/{id}',[ProductController::class,'detail']);

Route::get('/jute',[JuteController::class,'jute']);
Route::get('/jute/{id}',[JuteController::class,'detail']);

Route::get('/leno',[LenoController::class,'leno']);
Route::get('/leno-detail/{id}',[LenoController::class,'detail']);