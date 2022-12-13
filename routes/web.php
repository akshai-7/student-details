<?php

use App\Http\Controllers\Usercontroller;
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

Route::get('/',[Usercontroller::class,'create']);
Route::post('/store',[Usercontroller::class,'store']);
Route::get('/list',[Usercontroller::class,'list']);
Route::get('edit/{id}',[Usercontroller::class,'edit']);
Route::post('update/{id}',[Usercontroller::class,'update']);
Route::get('delete/{id}',[Usercontroller::class,'delete']);
