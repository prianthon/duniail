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

Route::get('/mahasiswas','MahasiswaController@index')->name('mahasiswas.index');

Route::get('/mahasiswas/create','MahasiswaController@create')->name('mahasiswas.create');

Route::post('/mahasiswas','MahasiswaController@store')->name('mahasiswas.store');

Route::get('/mahasiswas/{mahasiswa}','MahasiswaController@show')->name('mahasiswas.show');

Route::get('/mahasiswas/{mahasiswa}/edit','MahasiswaController@edit')->name('mahasiswas.edit');

Route::patch('/mahasiswas/{mahasiswa}','MahasiswaController@update')->name('mahasiswas.update');

Route::delete('/mahasiswa/{mahasiswa}','MahasiswaController@destroy')->name('mahasiswas.destroy');
