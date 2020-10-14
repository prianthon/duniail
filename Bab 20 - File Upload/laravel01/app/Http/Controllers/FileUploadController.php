<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
      return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
      //dump($request->berkas);

      //if($request->hasFile('berkas'))
      //{
      //  echo "path(): ".$request->berkas->path();
      //  echo "<br>";
      //  echo "extension(): ".$request->berkas->extension();
      //  echo "<br>";
      //  echo "getClientOriginalExtension(): ".$request->berkas->getClientOriginalExtension();
      //  echo "<br>";
      //  echo "getMimeType(): ".$request->berkas->getMimeType();
      //  echo "<br>";
      //  echo "getClientOriginalName(): ".$request->berkas->getClientOriginalName();
      //  echo "<br>";
      //  echo "getSize(): ".$request->berkas->getSize();
      //}
      //else
      //{
      //  echo "Tidak ada berkas yang diupload";
      //}

      // Validasi required
      //$request->validate([
      //  'berkas' => 'required',
      //]);

      // Validasi tipe data dan maksimum file
      $request->validate([
        'berkas' => 'required|file|image|max:1000',
      ]);

      //echo $request->berkas->getClientOriginalName()."Lolos Validasi";

      // Nama file upload di generate Laravel
      //$path = $request->berkas->store('uploads');

      // Nama file upload adalah "berkas"
      //$path = $request->berkas->storeAs('uploads','berkas');

      // Nama file upload sama seperti nama file asal
      //$namaFile = $request->berkas->getClientOriginalName();
      //$path = $request->berkas->storeAs('uploads',$namaFile);

      // Nama file upload di generate dari nama user + time() seperti nama file asal
      $extFile = $request->berkas->getClientOriginalExtension();
      $namaFile = 'lisa-'.time().".".$extFile;
      $path = $request->berkas->storeAs('uploads',$namaFile);

      echo "Proses upload berhasil, file berada di: $path";
    }
}
