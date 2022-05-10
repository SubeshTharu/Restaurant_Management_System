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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/',[\App\Http\Controllers\BodyController::class,'index']);
Route::get('login',[\App\Http\Controllers\LoginController::class,'login']);
Route::get('registration',[\App\Http\Controllers\LoginController::class,'registration']);
Route::post('/register-user', [\App\Http\Controllers\LoginController::class, 'registerUser'])->name('register-user');
Route::post('/login-user',[\App\Http\Controllers\LoginController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[\App\Http\Controllers\LoginController::class,'dashboard']);
Route::get('/menu',[\App\Http\Controllers\BodyController::class,'menu']);
Route::get('/special',[\App\Http\Controllers\BodyController::class,'special']);
Route::get('/chefs',[\App\Http\Controllers\BodyController::class,'chefs']);
Route::get('/about',[\App\Http\Controllers\BodyController::class,'about']);
Route::get('/order',[\App\Http\Controllers\BodyController::class,'order']);
Route::get('/gallary',[\App\Http\Controllers\BodyController::class,'gallary']);
Route::get('/book',[\App\Http\Controllers\BodyController::class,'book']);
Route::get('/booked',[\App\Http\Controllers\BodyController::class,'booked']);
Route::post('/booking',[\App\Http\Controllers\LoginController::class,'booking'])->name('booking');
Route::post('/ordering',[\App\Http\Controllers\LoginController::class,'ordering'])->name('ordering');

