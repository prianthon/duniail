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

Route::get('/daftar-mahasiswa','MahasiswaController@daftarMahasiswa')->middleware('coba');
Route::get('/tabel-mahasiswa','MahasiswaController@tabelMahasiswa');
Route::get('/blog-mahasiswa','MahasiswaController@blogMahasiswa')->middleware('coba');
