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

Route::get('/','\App\Http\Controllers\homecontroller@index');
Route::get('/editkc','\App\Http\Controllers\bobotkacamatacontroller@index')->middleware('auth');
Route::get('/editsl','\App\Http\Controllers\bobotsoftlenscontroller@index')->middleware('auth');
Route::get('/editkacamata/{id}','\App\Http\Controllers\kacamatacontroller@indexupdate')->middleware('auth');
Route::get('/editsoftlen/{id}','\App\Http\Controllers\softlenscontroller@indexupdate')->middleware('auth');
Route::post('/editkacamata/{id}','\App\Http\Controllers\kacamatacontroller@update')->middleware('auth');
Route::post('/editsoftlen/{id}','\App\Http\Controllers\softlenscontroller@update')->middleware('auth');
Route::delete('/deletekacamata/{id}','\App\Http\Controllers\kacamatacontroller@delete')->middleware('auth');
Route::delete('/deletesoftlen/{id}','\App\Http\Controllers\softlenscontroller@delete')->middleware('auth');

Route::get('/editwarna/{id}','\App\Http\Controllers\bobotkacamatacontroller@indexwarna')->middleware('auth');
Route::get('/editharga/{id}','\App\Http\Controllers\bobotkacamatacontroller@indexharga')->middleware('auth');
Route::get('/editukuran/{id}','\App\Http\Controllers\bobotkacamatacontroller@indexukuran')->middleware('auth');
Route::get('/editmodel/{id}','\App\Http\Controllers\bobotkacamatacontroller@indexmodel')->middleware('auth');
Route::get('/editketebalan/{id}','\App\Http\Controllers\bobotkacamatacontroller@indexketebalan')->middleware('auth');

Route::get('/editwarnasl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@indexwarna')->middleware('auth');
Route::get('/edithargasl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@indexharga')->middleware('auth');
Route::get('/editukuransl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@indexukuran')->middleware('auth');
Route::get('/editmasa/{id}','\App\Http\Controllers\bobotsoftlenscontroller@indexmasa')->middleware('auth');
Route::get('/editkadar/{id}','\App\Http\Controllers\bobotsoftlenscontroller@indexkadar')->middleware('auth');

Route::post('/editwarna/{id}','\App\Http\Controllers\bobotkacamatacontroller@editwarna')->middleware('auth');
Route::post('/editharga/{id}','\App\Http\Controllers\bobotkacamatacontroller@editharga')->middleware('auth');
Route::post('/editukuran/{id}','\App\Http\Controllers\bobotkacamatacontroller@editukuran')->middleware('auth');
Route::post('/editmodel/{id}','\App\Http\Controllers\bobotkacamatacontroller@editmodel')->middleware('auth');
Route::post('/editketebalan/{id}','\App\Http\Controllers\bobotkacamatacontroller@editketebalan')->middleware('auth');

Route::post('/editwarnasl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@editwarna')->middleware('auth');
Route::post('/edithargasl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@editharga')->middleware('auth');
Route::post('/editukuransl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@editukuran')->middleware('auth');
Route::post('/editmasa/{id}','\App\Http\Controllers\bobotsoftlenscontroller@editmasa')->middleware('auth');
Route::post('/editkadar/{id}','\App\Http\Controllers\bobotsoftlenscontroller@editkadar')->middleware('auth');

Route::delete('/deletewarna/{id}','\App\Http\Controllers\bobotkacamatacontroller@deletewarna')->middleware('auth');
Route::delete('/deleteharga/{id}','\App\Http\Controllers\bobotkacamatacontroller@deleteharga')->middleware('auth');
Route::delete('/deleteukuran/{id}','\App\Http\Controllers\bobotkacamatacontroller@deleteukuran')->middleware('auth');
Route::delete('/deletemodel/{id}','\App\Http\Controllers\bobotkacamatacontroller@deletemodel')->middleware('auth');
Route::delete('/deleteketebalan/{id}','\App\Http\Controllers\bobotkacamatacontroller@deleteketebalan')->middleware('auth');

Route::delete('/deletewarnasl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@deletewarna')->middleware('auth');
Route::delete('/deletehargasl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@deleteharga')->middleware('auth');
Route::delete('/deleteukuransl/{id}','\App\Http\Controllers\bobotsoftlenscontroller@deleteukuran')->middleware('auth');
Route::delete('/deletemasa/{id}','\App\Http\Controllers\bobotsoftlenscontroller@deletemasa')->middleware('auth');
Route::delete('/deletekadar/{id}','\App\Http\Controllers\bobotsoftlenscontroller@deletekadar')->middleware('auth');

Route::post('/addk','\App\Http\Controllers\kacamatacontroller@store')->middleware('auth');
Route::post('/warna','\App\Http\Controllers\bobotkacamatacontroller@warna')->middleware('auth');
Route::post('/harga','\App\Http\Controllers\bobotkacamatacontroller@harga')->middleware('auth');
Route::post('/ukuran','\App\Http\Controllers\bobotkacamatacontroller@ukuran')->middleware('auth');
Route::post('/model','\App\Http\Controllers\bobotkacamatacontroller@model')->middleware('auth');
Route::post('/ketebalan','\App\Http\Controllers\bobotkacamatacontroller@ketebalan')->middleware('auth');

Route::post('/addsl','\App\Http\Controllers\softlenscontroller@store')->middleware('auth');
Route::post('/warnasl','\App\Http\Controllers\bobotsoftlenscontroller@warna')->middleware('auth');
Route::post('/hargasl','\App\Http\Controllers\bobotsoftlenscontroller@harga')->middleware('auth');
Route::post('/ukuransl','\App\Http\Controllers\bobotsoftlenscontroller@ukuran')->middleware('auth');
Route::post('/masa','\App\Http\Controllers\bobotsoftlenscontroller@masa')->middleware('auth');
Route::post('/kadar','\App\Http\Controllers\bobotsoftlenscontroller@kadar')->middleware('auth');

Route::get('/addk','\App\Http\Controllers\kacamatacontroller@index')->middleware('auth');
Route::get('/genk','\App\Http\Controllers\kacamatacontroller@indexgen');
Route::post('/genk','\App\Http\Controllers\kacamatacontroller@gen');

Route::get('/addsl','\App\Http\Controllers\softlenscontroller@index')->middleware('auth');
Route::get('/gensl','\App\Http\Controllers\softlenscontroller@indexgen');
Route::post('/gensl','\App\Http\Controllers\softlenscontroller@gen');

Route::get('/viewkacamata/{id}','\App\Http\Controllers\kacamatacontroller@viewkacamata');
Route::get('/viewsoftlen/{id}','\App\Http\Controllers\softlenscontroller@viewsoftlen');
Auth::routes();

