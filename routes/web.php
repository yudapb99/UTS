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

Route::get('/','ViewController@index');

Route::get('/tambah',function () {
return view ('UTS.tambah');
});
Route::get('/edit',function () {
return view ('UTS.edit');
});
Route::get('/home',function () {
return view ('UTS.home');
});
Route::get('/login',function () {
return view ('UTS.login');
});