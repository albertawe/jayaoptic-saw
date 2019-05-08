<?php

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

Route::get('/home','\App\Http\Controllers\homecontroller@index');
Route::get('/editkc','\App\Http\Controllers\bobotkacamatacontroller@index');

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::post('/addk','\App\Http\Controllers\kacamatacontroller@store');
Route::post('/warna','\App\Http\Controllers\bobotkacamatacontroller@warna');
Route::post('/harga','\App\Http\Controllers\bobotkacamatacontroller@harga');
Route::post('/ukuran','\App\Http\Controllers\bobotkacamatacontroller@ukuran');
Route::post('/model','\App\Http\Controllers\bobotkacamatacontroller@model');
Route::post('/ketebalan','\App\Http\Controllers\bobotkacamatacontroller@ketebalan');

Route::get('/addk','\App\Http\Controllers\kacamatacontroller@index');
Route::get('/genk','\App\Http\Controllers\kacamatacontroller@indexgen');
Route::post('/genk','\App\Http\Controllers\kacamatacontroller@gen');
Route::get('/adds', function () {
    return view('addsoftlens');
});

Auth::routes();

