<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
      // Cara pendefinisian collection dengan membuat object Collection
      //$myArray = [1, 9, 3, 4, 5, 3, 5, 7];
      //$collection = new \Illuminate\Support\Collection($myArray);

      // Cara pendefinisian collection dengan helper function collect()
      //$myArray = [1, 9, 3, 4, 5, 3, 5, 7];
      //$collection = collect($myArray);

      // Cara pendefinisian collection dengan helper function collect()
      $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

      // Cetak struktur detail variabel
      //echo "<pre>";
      //var_dump($collection);
      //echo "</pre>";

      // Cetak struktur detail variabel
      dump($collection);
    }

    public function collectionDua()
    {
      // Cara pendefinisian collection dengan helper function collect()
      //$collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

      // Akses isi collection secara individu
      //echo $collection[0]; echo "<br>";
      //echo $collection[2]; echo "<br>";

      // Akses isi collection menggunakan perulangan foreach
      //foreach($collection as $value) {
      //  echo "$value";
      //}

      // Langsung men-echo collection
      //echo $collection;

      //echo "<hr>";

      // Collection dari berbagai tipe data
      //$collection = collect(["belajar", "laravel", "uncover", 1, 2, 3]);
      //echo $collection; // ["belajar","laravel","uncover",1,2,3]

      //echo "<br>";

      // Collection dari associative array
      //$collection = collect([
      //  "nama" => "Laura",
      //  "sekolah" => "SMA 5 Lampung",
      //  "kota" => "Lampung",
      //  "jurusan" => "IPA",
      //]);

      //echo $collection; // {"nama":"Laura","sekolah":"SMA 5 Lampung","kota":"Lampung","jurusan":"IPA"}

      // Percobaan beda antara array biasa dengan associative array
      $varA = [1,2,3];
      $varB = ["0"=>1, "1"=>2, "2"=>3];

      dump($varA===$varB); // true

      $varA = collect([1,2,3]);
      $varB = collect(["1"=>1, "2"=>2, "3"=>3]);

      echo $varA; // [1,2,3]
      echo "<br>";
      echo $varB; // {"1":1,"2":2,"3":3}

    }

    public function collectionTiga()
    {
      $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

      // Method Matematis
      //dump( $collection->sum() ); // 37
      //dump( $collection->avg() ); // 4.625
      //dump( $collection->max() ); // 9
      //dump( $collection->min() ); // 1
      //dump( $collection->median() ); // 4.5

      // Mengambil 1 element acak dari collection
      //dump( $collection->random() );

      // Menambah element baru ke dalam collection
      //echo $collection->concat([10,11,12]); // [1,9,3,4,5,3,5,7,10,11,12]

      // Cek apakah angka 3 ada di dalam collection
      //dump( $collection->contains(3) ); // true
      // Cek apakah angka 8 ada di dalam collection
      //dump( $collection->contains(8) ); // false

      // Filter dan tampilkan element yang tidak berulang (unik)
      // $collection = collect(["0"=>1,"1"=>9,"2"=>3,"3"=>4,"4"=>5,"6"=>5,"7"=>7]);
      //echo $collection->unique(); // {"0":1,"1":9,"2":3,"3":4,"4":5,"7":7}

      // Ambil semua nilai collection menjadi array
      //dump( $collection->all() ); // [1, 9, 3, 4, 5, 3, 5, 7]

      // Percobaan beda hasil dump() antara collection dan array
      //$varA = [1,2,3];
      //$varB = collect([1,2,3]);

      //dump($varA);
      //dump($varB);

      // Ambil element pertama dari collection
      //dump( $collection->first() ); // 1

      // Ambil element terakhir dari collection
      //dump( $collection->last() ); // 7

      // Hitung jumlah element
      //dump( $collection->count() ); // 8

      // Urutkan element di collection
      echo $collection->sort(); // {"0":1,"2":3,"5":3,"3":4,"4":5,"6":5,"7":7,"1":9}
    }

    public function collectionEmpat()
    {
      $collection = collect([
        "nama" => "Laura",
        "sekolah" => "SMA 5 Lampung",
        "kota" => "Lampung",
        "jurusan" => "IPA",
      ]);

      // Ambil nilai berdasarkan key
      //dump( $collection->get('sekolah') ); // SMA 5 Lampung

      // Ambil nilai berdasarkan key. Jika tidak ditemukan, kembalikan nilai di argument kedua
      dump( $collection->get('umur', 17) ); // 17"
    }

    public function collectionLima()
    {
      //... isi method collectionLima
    }

    public function collectionEnam()
    {
      //... isi method collectionEnam
    }
}
