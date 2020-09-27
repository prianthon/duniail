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

Route::get('/', function () {
    return view('welcome');
});

// ====================
// ## Membuat Route ##

Route::get('/hello', function(){
  return 'Hello World';
});

Route::get('/belajar', function(){
  echo '<h1>Hello World</h1>';
  echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/fasilkom/anto', function(){
  echo '<h2 style="text-align:center"><u>Welcome Anto</u></h2>';
});

// ====================
// ## Membuat Route Parameter ##

//Route::get('/mahasiswa/{nama}', function($nama){
//  return "Tampilkan data mahasiswa bernama $nama";
//});

//Route::get('/stok_barang/{jenis}/{merek}', function($jenis,$merek){
//  return "Cek sisa stok untuk $jenis $merek";
//});

//Route::get('/stok_barang/{jenis}/{merek}', function($a,$b){
//  echo "Cek sisa stok untuk $a $b";
//});

// ====================
// ## Membuat Route Parameter ##

Route::get('/stok_barang/{jenis?}/{merek?}', function($a = 'smartphone',$b = 'samsung'){
  return "Cek sisa stok untuk $a $b";
});

// ====================
// ## Route Parameter dengan Regular Expression ##

//Route::get('/user/{id}', function($id){
//  return "Tampilkan user dengan id = $id";
//});

//Route::get('/user/{id}', function($id){
//  return "Tampilkan user dengan id = $id";
//})->where('id','[0-9]+');

Route::get('/user/{id}', function($id){
  return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

// ====================
// ## Route Redirect ##

Route::get('/hubungi-kami', function(){
  return '<h1>Hubungi Kami</h1>';
});

Route::redirect('/contact-us','/hubungi-kami');

// ====================
// ## Route Group ##

//Route::get('/admin/mahasiswa', function(){
//  return "<h1>Daftar Mahasiswa</h1>";
//});

//Route::get('/admin/dosen', function(){
//  return "<h1>Daftar Dosen</h1>";
//});

//Route::get('/admin/karyawan', function(){
//  return "<h1>Daftar Karyawan</h1>";
//});

Route::prefix('/admin')->group(function(){

  Route::get('/mahasiswa', function(){
    echo "<h1>Daftar Mahasiswa</h1>";
  });

  Route::get('/dosen', function(){
    echo "<h1>Daftar Dosen</h1>";
  });

  Route::get('/karyawan', function(){
    echo "<h1>Daftar Karyawan</h1>";
  });

});

// ====================
// ## Route Fallback ##

Route::fallback(function(){
  return "Maaf, alamat tidak ditemukan";
});

// ====================
// ## Route Priority ##

//Route::get('/buku/1', function(){
//  return "Buku ke-1";
//});

//Route::get('/buku/1', function(){
//  return "Buku saya ke-1";
//});

//Route::get('/buku/1', function(){
//  return "Buku kita ke-1";
//});

Route::get('/buku/{a}', function($a){
  return "Buku ke-$a";
});

Route::get('/buku/{b}', function($b){
  return "Buku saya ke-$b";
});

Route::get('/buku/{c}', function($c){
  return "Buku kita ke-$c";
});

// ====================
// ## Penulisan URL Route ##

Route::get('mahasiswa/andi', function(){
  echo "Halaman mahasiswa andi";
});
