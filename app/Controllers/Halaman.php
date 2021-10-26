<?php

namespace App\Controllers;

use App\Models\HotelModel;

class Halaman extends BaseController
{
    protected $HotelModel;
    public function __construct(){
        $this->HotelModel = new HotelModel();
    }
    
     public function viewSignIn()
    {
        return view('page/SignIn');
    }
    public function viewSignUp()
    {
        return view('page/SignUp');
    }
    public function viewSearch()
    {
        return view('page/search');
    }
    public function listKamar()
    {
        
        $kamar = $this->HotelModel->findAll();
        $data=[
            'kamar' => $kamar
        ];
        // dd($data);
        return view('page/listKamar', $data);
    }
    public function viewProfil(){
        return view('page/Profil');
    }
}
