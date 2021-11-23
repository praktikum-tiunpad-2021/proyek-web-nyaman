<?php

namespace App\Controllers;
use App\Models\ListKamarModel;
use App\Models\DetailKamarModel;

class ListKamar extends BaseController{
    protected $ListKamarModel;
    protected $DetailKamarModel;
    public function __construct(){
        $this->ListKamarModel = new ListKamarModel();
        $this->DetailKamarModel = new DetailKamarModel();
    }

    public function listKamar()
    {
        $kamar = $this->ListKamarModel->findall();
        $data=[
            'kamar' => $kamar
        ];
        // dd($data);
        return view('page/listKamar', $data);
    }

    public function DetailKamar($id_kamar)
    {   
        if(session()->get('username') == ''){
            session()->setFlashdata('gagal', 'Silahkan Login terlebih dahulu!!');
            return redirect()->to(base_url('/Sign-In'));
        }
        $kamar = $this->ListKamarModel->find($id_kamar);
        $detail = $this->DetailKamarModel->find($id_kamar);
        $data=[
            'kamar' => $kamar,
            'detail' => $detail
        ];
        //dd($data);
        return view('page/detailKamar', $data);
    }
    public function tambahKamar(){
        return view('page/tambahKamar');
    }
}