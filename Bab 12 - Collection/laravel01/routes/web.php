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

Route::get('/satu','CollectionController@collectionSatu');
Route::get('/dua','CollectionController@collectionDua');
Route::get('/tiga','CollectionController@collectionTiga');
Route::get('/empat','CollectionController@collectionEmpat');
Route::get('/lima','CollectionController@collectionLima');
Route::get('/enam','CollectionController@collectionEnam');
Route::get('/exercise','CollectionController@exercise');
