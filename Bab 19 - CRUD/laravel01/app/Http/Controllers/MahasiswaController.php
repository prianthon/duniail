<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
      $mahasiswas = Mahasiswa::all();
      return view('mahasiswa.index',['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
      return view('form-pendaftaran');
    }

    public function store(Request $request)
    {
      $validateData = $request->validate([
        'nim'             => 'required|size:8',
        'nama'            => 'required|min:3|max:50',
        'jenis_kelamin'   => 'required|in:P,L',
        'jurusan'         => 'required',
        'alamat'          => '',
      ]);

      //dump($validateData);

      //$mahasiswa = new Mahasiswa();
      //$mahasiswa->nim = $validateData['nim'];
      //$mahasiswa->nama = $validateData['nama'];
      //$mahasiswa->jenis_kelamin = $validateData['jenis_kelamin'];
      //$mahasiswa->jurusan = $validateData['jurusan'];
      //$mahasiswa->alamat = $validateData['alamat'];
      //$mahasiswa->save();

      // mass assignment
      Mahasiswa::create($validateData);

      return "Data berhasil diinput ke database";
    }

    public function show(Mahasiswa $mahasiswa)
    {
      //dd($mahasiswa);

      //$result = Mahasiswa::find($mahasiswa);
      //$result = Mahasiswa::findOrFail($mahasiswa);
      return view('mahasiswa.show',['mahasiswa' => $mahasiswa]);
    }
}
