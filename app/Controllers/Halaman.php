<?php

namespace App\Controllers;

class Halaman extends BaseController
{
     public function viewLogin()
    {
        return view('page/login');
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
