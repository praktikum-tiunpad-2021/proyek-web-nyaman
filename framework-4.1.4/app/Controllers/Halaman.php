<?php

namespace App\Controllers;

class Halaman extends BaseController
{
    public function viewRekomendasi()
    {
        return view('rekomendasi');
    }
     public function viewLogin()
    {
        return view('login');
    }
    public function viewAwal()
    {
        return view('halamanAwal');
    }
    public function listKamar()
    {
        return view('page/listKamar');
    }
}
