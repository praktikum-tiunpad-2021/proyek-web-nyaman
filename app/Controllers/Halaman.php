<?php

namespace App\Controllers;

class Halaman extends BaseController
{
     public function viewLogin()
    {
        return view('page/login');
    }
    public function viewSearch()
    {
        return view('page/search');
    }
    public function listKamar()
    {
        return view('page/listKamar');
    }
}
