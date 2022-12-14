<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Registercontroller;
use App\Http\Controllers\Auth\Logincontroller;

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

Route::view('register','register');
Route::post('/login',[Registercontroller::class,'store']);


Route::view('login','login');
Route::post('/home',[Logincontroller::class,'authenticate']);

Route::get('logout',[Logincontroller::class,'logout']);


Route::get('/home',[Usercontroller::class,'create']);
Route::post('/store',[Usercontroller::class,'store']);
Route::get('/list',[Usercontroller::class,'list']);
Route::get('edit/{id}',[Usercontroller::class,'edit']);
Route::post('update/{id}',[Usercontroller::class,'update']);
Route::get('delete/{id}',[Usercontroller::class,'delete']);
