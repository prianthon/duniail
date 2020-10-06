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

Route::get('/', 'MahasiswaController@index');
Route::get('/insert-sql', 'MahasiswaController@insertSql');
Route::get('/insert-timestamp', 'MahasiswaController@insertTimestamp');
Route::get('/insert-prepared', 'MahasiswaController@insertPrepared');
Route::get('/insert-named-binding', 'MahasiswaController@insertNamedBinding');
Route::get('/update', 'MahasiswaController@update');
Route::get('/delete', 'MahasiswaController@delete');
Route::get('/select', 'MahasiswaController@select');
Route::get('/select-tampil', 'MahasiswaController@selectTampil');
Route::get('/select-view', 'MahasiswaController@selectView');
Route::get('/select-where', 'MahasiswaController@selectWhere');
Route::get('/statement', 'MahasiswaController@statement');
