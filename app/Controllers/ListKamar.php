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

    public function index()
    {
        $data=[
            'kamar' => $this->ListKamarModel->getListKamar()
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
        $data=[
            'kamar' =>  $this->ListKamarModel->getListKamar($id_kamar),
            'detail' => $this->DetailKamarModel->getDetail($id_kamar)
        ];
        //dd($data);
        if(empty($data['detail'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('kamar tidak ditemukan');
        }
        return view('page/detailKamar', $data);
    }
    public function create(){
        return view('page/createKamar');
    }

    public function save(){
        //dd($this->request->getVar());
        $this->ListKamarModel->save([
            'jenis_kamar' => $this->request->getVar('jenis_kamar'),
            'harga' => $this->request->getVar('harga')
        ]);
        $kamar = $this->ListKamarModel->where(['jenis_kamar' => $this->request->getVar('jenis_kamar')])->first();
        $id_kamar = $kamar['id_kamar'];
        $this->DetailKamarModel->save([
            'id_kamar' => $id_kamar,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'luas_kamar' => $this->request->getVar('luas_kamar'),
            'ranjang' => $this->request->getVar('ranjang'),
            'ac' => $this->request->getVar('ac'),
            'tv' => $this->request->getVar('tv'),
            'wifi' => $this->request->getVar('wifi'),
            'tmp_penyimpanan' => $this->request->getVar('tmp_penyimpanan'),
            'mini_bar' => $this->request->getVar('mini_bar'),
            'kamar_mandi' => $this->request->getVar('kamar_mandi'),
            'hair_dryer' => $this->request->getVar('hair_dryer'),
            'air' => $this->request->getVar('air'),
            'sarapan' => $this->request->getVar('sarapan')
        ]);

        return redirect()->to('/list-kamar');
    }
}