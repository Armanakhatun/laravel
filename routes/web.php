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

Route::get('/armana', function () {
    return view('welcome');
});
Route::get('/hello',function(){
	return view('firstpage');
});
// Route::get('/second',function(){
// 	return view('secondpage');
// });
Route::get('/second','App\Http\Controllers\myController@index');
