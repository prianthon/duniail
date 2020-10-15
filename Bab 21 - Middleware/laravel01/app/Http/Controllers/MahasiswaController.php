<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct()
    {
      // Middleware aktif untuk semua route
      //$this->middleware('coba');

      // Middleware aktif untuk satu route
      //$this->middleware('coba')->only('daftarMahasiswa');

      // Middleware aktif untuk beberapa route
      //$this->middleware('coba')->only('daftarMahasiswa','tabelMahasiswa');

      // Middleware aktif kecuali satu route
      $this->middleware('coba')->except('tabelMahasiswa');
    }

    public function daftarMahasiswa()
    {
      return 'From pendaftaran mahasiswa';
    }

    public function tabelMahasiswa()
    {
      return 'Tabel data mahasiswa';
    }

    public function blogMahasiswa()
    {
      return 'Halaman blog mahasiswa';
    }
}
