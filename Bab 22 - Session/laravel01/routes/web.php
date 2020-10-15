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

Route::get('/','SessionController@index');
Route::get('/buat-session','SessionController@buatSession');
Route::get('/akses-session','SessionController@aksesSession');
Route::get('/hapus-session','SessionController@hapusSession');
Route::get('/flash-session','SessionController@flashSession');
