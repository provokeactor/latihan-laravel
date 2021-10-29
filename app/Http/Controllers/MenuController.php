<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function info_kegiatan()
    {
        return view('info_kegiatan');
    }

    public function data_siswa()
    {
        return view('data_siswa');
    }
    
}
