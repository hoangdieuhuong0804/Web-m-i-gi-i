<?php

use Illuminate\Support\Facades\Auth;
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
    return view(view:'layout.master');
   
});
Route::get(uri:'/login', action:[AuthController::class,'login']);
Route::get(uri:'/register', action:[AuthController::class,'register'])->name(name:'register');