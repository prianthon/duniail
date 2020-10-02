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
      $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

      // Akses isi collection secara individu
      //echo $collection[0]; echo "<br>";
      //echo $collection[2]; echo "<br>";

      // Akses isi collection menggunakan perulangan foreach
      //foreach($collection as $value) {
      //  echo "$value";
      //}

      // Langsung men-echo collection
      echo $collection;
    }

    public function collectionTiga()
    {
      //... isi method collectionTiga
    }

    public function collectionEmpat()
    {
      //... isi method collectionEmpat
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
