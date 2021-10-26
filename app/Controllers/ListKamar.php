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
        //$kamar = $this->ListKamarModel->getListKamar()->findall();
        $data=[
            'kamar' => $kamar
        ];
        // dd($data);
        return view('page/listKamar', $data);
    }

    public function DetailKamar($id_kamar)
    {
        $kamar = $this->ListKamarModel->find($id_kamar);
        $detail = $this->DetailKamarModel->find($id_kamar);
        $data=[
            'kamar' => $kamar,
            'detail' => $detail
        ];
        //dd($data);
        return view('page/detailKamar', $data);
    }
}