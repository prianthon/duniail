<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MahasiswaController extends Controller
{
    public function formPendaftaran($locale = 'id')
    {
      App::setLocale($locale);
      return view('form-pendaftaran');
    }
}
