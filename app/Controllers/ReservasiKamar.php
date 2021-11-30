<?php

namespace App\Controllers;
use App\Models\ListKamarModel;
use App\Models\DetailKamarModel;
use App\Models\ReservasiKamarModel;
use App\Models\KamarModel;

class ReservasiKamar extends BaseController{
    protected $ListKamarModel;
    protected $DetailKamarModel;
    protected $KamarModel;
    protected $ReservasiKamarModel;
    public function __construct(){
        $this->ListKamarModel = new ListKamarModel();
        $this->DetailKamarModel = new DetailKamarModel();
        $this->KamarModel = new KamarModel();
        $this->ReservasiKamarModel = new ReservasiKamarModel();
    }

    public function book($id_kamar){
        $data=[
            'kamar' =>  $this->ListKamarModel->getListKamar($id_kamar),
            'detail' => $this->DetailKamarModel->getDetail($id_kamar)
        ];
        return view('kamar/bookKamar', $data);
    }   

    public function simpan($username){
        //dd($this->request->getVar());
        
        $kamar = $this->ListKamarModel->where(['jenis_kamar' => $this->request->getVar('jenis_kamar')])->first();
        $id_kamar = $kamar['id_kamar'];
        $kamar2 = $this->KamarModel->where(['id_kamar' => $id_kamar])->first();
        $no_kamar = $kamar2['no_kamar'];
        $data= [
            'id_kamar' => $id_kamar,
            'no_kamar' => $no_kamar
        ];
        //dd($data);
        $no_pesanan = $this->request->getVar('nopesan');
        $this->ReservasiKamarModel->save([
            'no_pesanan' => $no_pesanan,
            'username' => $username,
            'currentTime' => $this->request->getVar('currentTime'),
            'no_kamar' => $no_kamar,
            'harga' => $this->request->getVar('biaya'),
            'checkin' => $this->request->getVar('checkin'),
            'checkout' => $this->request->getVar('checkout')
        ]);
        return redirect()->to(base_url('ReservasiKamar/bukti/'.$no_pesanan));
    }
    
    public function bukti($no_pesanan){
        $data=[
            'reservasi' =>  $this->ReservasiKamarModel->getReservasi($no_pesanan)
        ];
        //dd($data);
        return view('kamar/buktiBayar', $data);
    }
}