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

Route::get('/login','MahasiswaController@login');
Route::post('/login','MahasiswaController@prosesLogin');

Route::get('/logout','MahasiswaController@logout');

Route::redirect('/','/login');

Route::get('/daftar-mahasiswa','MahasiswaController@daftarMahasiswa')->middleware('login');
Route::get('/tabel-mahasiswa','MahasiswaController@tabelMahasiswa')->middleware('login');
Route::get('/blog-mahasiswa','MahasiswaController@blogMahasiswa')->middleware('login');
