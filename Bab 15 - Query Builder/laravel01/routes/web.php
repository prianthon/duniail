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

Route::get('/insert', 'MahasiswaController@insert');
Route::get('/insert-banyak', 'MahasiswaController@insertBanyak');
Route::get('/update', 'MahasiswaController@update');
Route::get('/update-where', 'MahasiswaController@updateWhere');
Route::get('/update-or-insert', 'MahasiswaController@updateOrInsert');
Route::get('/delete', 'MahasiswaController@delete');
Route::get('/get', 'MahasiswaController@get');
Route::get('/get-tampil', 'MahasiswaController@getTampil');
Route::get('/get-view', 'MahasiswaController@getView');
Route::get('/get-where', 'MahasiswaController@getWhere');
Route::get('/select', 'MahasiswaController@select');
Route::get('/take', 'MahasiswaController@take');
Route::get('/first', 'MahasiswaController@first');
Route::get('/find', 'MahasiswaController@find');
Route::get('/raw', 'MahasiswaController@raw');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/{nim}', 'MahasiswaController@mahasiswa');
