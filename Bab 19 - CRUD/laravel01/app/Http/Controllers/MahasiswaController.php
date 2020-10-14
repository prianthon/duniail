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
      return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
      $validateData = $request->validate([
        'nim'             => 'required|size:8|unique:mahasiswas',
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

      //return "Data berhasil diinput ke database";

      // Untuk Percobaan
      //$request->session()->flash('pesan','Penambahan data berhasil');

      // Cara 1
      //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");

      //return redirect()->route('mahasiswas.index');

      // Cara 2
      return redirect()->route('mahasiswas.index')->with('pesan',"Penambahan data {$validateData['nama']} berhasil");
    }

    public function show(Mahasiswa $mahasiswa)
    {
      //dd($mahasiswa);

      //$result = Mahasiswa::find($mahasiswa);
      //$result = Mahasiswa::findOrFail($mahasiswa);
      return view('mahasiswa.show',['mahasiswa' => $mahasiswa]);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
      return view('mahasiswa.edit',['mahasiswa'=>$mahasiswa]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
      //dump($request->all());
      //dump($mahasiswa);

      $validateData = $request->validate([
        'nim'             => 'required|size:8|unique:mahasiswas,nim,'.$mahasiswa->id,
        'nama'            => 'required|min:3|max:50',
        'jenis_kelamin'   => 'required|in:P,L',
        'jurusan'         => 'required',
        'alamat'          => '',
      ]);

      //Mahasiswa::where('id',$mahasiswa->id)->update($validateData);

      $mahasiswa->update($validateData);

      return redirect()->route('mahasiswas.show',['mahasiswa' => $mahasiswa->id])->with('pesan',"Update data {$validateData['nama']} berhasil");
    }
}
