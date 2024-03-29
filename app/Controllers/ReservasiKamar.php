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

    public function ReservasiUser(){
        $username = session()->get('username');
        $db      = \Config\Database::connect();
        $builder = $db->table('reservasi');
        $builder->select('reservasi.no_pesanan, reservasi.no_kamar, reservasi.checkin, reservasi.checkout, reservasi.harga, reservasi.status, jenis_kamar.jenis_kamar, jenis_kamar.gambar');
        $builder->join('kamar', 'reservasi.no_kamar = kamar.no_kamar');
        $builder->join('jenis_kamar', 'kamar.id_kamar = jenis_kamar.id_kamar');
        $builder->where('username', $username);
        $query = $builder->get();
        $data=[
            'reservasi' => $query->getResultArray()
        ];
        //dd($data);
        return view('Reservasi/listReservasi', $data);
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
        $kamar2 = $this->KamarModel->where(['id_kamar' => $id_kamar, 'status' => 'kosong'])->first();
        $no_kamar = $kamar2['no_kamar'];
        //buat ngecek data yg diambil
        // $data= [
        //     'id_kamar' => $id_kamar,
        //     'no_kamar' => $no_kamar
        // ];
        //dd($data);
        $this->ReservasiKamarModel->save([
            'username' => $username,
            'currentTime' => $this->request->getVar('currentTime'),
            'no_kamar' => $no_kamar,
            'harga' => $this->request->getVar('biaya'),
            'checkin' => $this->request->getVar('checkin'),
            'checkout' => $this->request->getVar('checkout'),
            'status' => 'Belum Selesai'
        ]);
        $this->KamarModel->save([
            'no_kamar' => $no_kamar,
            'status' => 'terisi'
        ]);
        $pesanan = $this->ReservasiKamarModel->where(['no_kamar' => $no_kamar])->first();
        //dd($pesanan);
        return redirect()->to(base_url('ReservasiKamar/bukti/'.$pesanan['no_pesanan']));
    }
    
    public function bukti($no_pesanan){
        $data=[
            'reservasi' =>  $this->ReservasiKamarModel->getReservasi($no_pesanan)
        ];
        //dd($data);
        if(empty($data['reservasi'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('reservasi tidak ditemukan');
        }
        return view('kamar/buktiBayar', $data);
    }
    
    public function dataReservasi(){
        $db      = \Config\Database::connect();
        $builder = $db->table('reservasi');
        // $builder->select('*');
        $builder->select('reservasi.no_pesanan, reservasi.username, reservasi.no_kamar, reservasi.checkin, reservasi.checkout, reservasi.harga, reservasi.currentTime, reservasi.status, jenis_kamar.jenis_kamar');
        $builder->join('kamar', 'reservasi.no_kamar = kamar.no_kamar');
        $builder->join('jenis_kamar', 'kamar.id_kamar = jenis_kamar.id_kamar');
        $query = $builder->get();
        $data=[
            'reservasi' => $query->getResultArray()
        ];
        //dd($data);
        return view('Reservasi/dataReservasi', $data);
    }

    public function checkout($no_pesanan){
        $kamar = $this->ReservasiKamarModel->where(['no_pesanan' => $no_pesanan])->first();
        $nokamar = $this->KamarModel->where(['no_kamar' => $kamar['no_kamar']])->first();
        //dd($nokamar);
        $this->ReservasiKamarModel->save([
            'no_pesanan' => $no_pesanan,
            'status' => 'Selesai'
        ]);
        $this->KamarModel->save([
            'no_kamar' => $nokamar['no_kamar'],
            'status' => 'kosong'
        ]);
        return redirect()->to(base_url('/data-reservasi'));
    }
}