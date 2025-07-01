<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    public function sertifikasi()
    {
        return view('Sertifikasi.sertifikasi');
    }
}
