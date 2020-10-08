<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function cekObject(){
      $mahasiswa = new Mahasiswa;

      dump($mahasiswa);
    }

    public function insert(){
      $mahasiswa = new Mahasiswa;
      $mahasiswa->nim = '19003036';
      $mahasiswa->nama = 'Sari Citra Lestari';
      $mahasiswa->tanggal_lahir = '2001-12-31';
      $mahasiswa->ipk = 3.5;
      $mahasiswa->save();

      dump($mahasiswa);
    }

    public function massAssignment(){
      Mahasiswa::create(
        [
          'nim' => '19021044',
          'nama' => 'Rudi Permana',
          'tanggal_lahir' => '2000-08-22',
          'ipk' => 2.5,
        ]
      );

      return "Berhasil di proses";
    }

    public function massAssignment2(){
      $mahasiswa1 = Mahasiswa::create(
        [
          'nim' => '19002032',
          'nama' => 'Rina Kumala Sari',
          'tanggal_lahir' => '2000-06-28',
          'ipk' => 3.4,
        ]
      );
      dump($mahasiswa1);

      $mahasiswa2 = Mahasiswa::create(
        [
          'nim' => '18012012',
          'nama' => 'James Situmorang',
          'tanggal_lahir' => '1999-04-02',
          'ipk' => 2.7,
        ]
      );
      dump($mahasiswa2);

      $mahasiswa3 = Mahasiswa::create(
        [
          'nim' => '19005011',
          'nama' => 'Riana Putria',
          'tanggal_lahir' => '2000-11-23',
          'ipk' => 2.9,
        ]
      );
      dump($mahasiswa3);
    }

    public function update(){
      $mahasiswa = Mahasiswa::find(1);
      $mahasiswa->tanggal_lahir = '2001-01-01';
      $mahasiswa->ipk = 2.9;
      $mahasiswa->save();

      dump($mahasiswa);
    }

    public function updateWhere(){
      $mahasiswa = Mahasiswa::where('nim','19003036')->first();
      $mahasiswa->tanggal_lahir = '2001-12-31';
      $mahasiswa->ipk = 4.0;
      $mahasiswa->save();

      dump($mahasiswa);
    }

    public function massUpdate(){
      Mahasiswa::where('nim','19003036')->first()->update([
        'tanggal_lahir' => '2000-04-20',
        'ipk' => 2.1
      ]);
      return "Berhasil di proses";
    }

    public function delete(){
      $mahasiswa = Mahasiswa::find(1);
      $mahasiswa->delete();

      dump($mahasiswa);
      // error jika mahasiswa tidak ditemukan
    }

    public function destroy(){
      $mahasiswa = Mahasiswa::destroy(1);
      dump($mahasiswa);
      // tidak error jika mahasiswa tidak ditemukan
      // bisa juga seperti ini: Mahasiswa::destroy([3,9,10]);
    }

    public function massDelete(){
      $mahasiswa = Mahasiswa::where('ipk','>',2)->delete();
      dump($mahasiswa);
    }
}
