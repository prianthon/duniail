<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
      // Buat link untuk ke semua route
      echo '<ul>';
      echo '<li><a href=/buat-session>Buat Session</a></li>';
      echo '<li><a href=/akses-session>Akses Session</a></li>';
      echo '<li><a href=/hapus-session>Hapus Session</a></li>';
      echo '<li><a href=/flash-session>Flash Session</a></li>';
      echo '</ul>';
    }

    public function buatSession(Request $request)
    {
      // Cara pertama membuat session, menggunakan helper function
      //session(['hakAkses' => 'admin']);

      // Cara kedua membuat session, dari Request object
      //$request->session()->put('hakAkses','admin');

      // Cara ketiga membuat session, menggunakan facade Session
      //Session::put('hakAkses','admin');

      // Membuat lebih dari 1 session
      // session(['hakAkses' => 'admin','nama' => 'Anto']);
      // $request->session()->put(['hakAkses' => 'admin','nama' => 'Anto']);
      // Session::put(['hakAkses' => 'admin','nama' => 'Anto']);

      // Nested array session
      //session(['siswa'=>['Anto','Rudi','Elsa','Friska']]);

      // Untuk praktek
      session(['hakAkses' => 'admin','nama' => 'Anto']);
      return "Session sudah dibuat";
    }

    public function aksesSession(Request $request)
    {
      // Menggunakan helper function
      //echo session('hakAkses');
      //echo session('nama');

      //echo '<hr>';

      // Dari Request object
      //echo $request->session()->get('hakAkses');
      //echo $request->session()->get('nama');

      //echo '<hr>';

      // Menggunakan facade Session
      //echo Session::get('hakAkses');
      //echo Session::get('nama');

      // Akses semua session
      //dump( session()->all());

      // Buat nilai default
      //$isiSession = $request->session()->get('kota','Jakarta');
      //echo "Isi session adalah $isiSession";

      // Proses pemeriksaan session
      if (session()->has('hakAkses'))
      {
        echo "Session 'hakAkses' terdeteksi: ". session('hakAkses');
      }
    }

    public function hapusSession()
    {
      //
    }

    public function flashSession()
    {
      //
    }
}
