<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontroller;
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
Route::get('service',[firstcontroller::class,'first']);
Route::post('login',[firstcontroller::class,'second']);
Route::post('secondlogin',[firstcontroller::class,'third']);
Route::post('secondlogin-save',[firstcontroller::class,'save']);
Route::get('registers-edit/{id}',[firstcontroller::class,'edit']);
Route::post('secondlogin-update',[firstcontroller::class,'update']);
Route::get('registers-delete/{id}',[firstcontroller::class,'delete']);
