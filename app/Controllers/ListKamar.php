<?php

namespace App\Controllers;
use App\Models\ListKamarModel;
use App\Models\DetailKamarModel;
use App\Models\KamarModel;
class ListKamar extends BaseController{
    protected $ListKamarModel;
    protected $DetailKamarModel;
    protected $KamarModel;
    public function __construct(){
        $this->ListKamarModel = new ListKamarModel();
        $this->DetailKamarModel = new DetailKamarModel();
        $this->KamarModel = new KamarModel();
    }

    public function index()
    {
        $data=[
            'kamar' => $this->ListKamarModel->getListKamar()
        ];
        // dd($data);
        return view('kamar/index', $data);
    }

    public function DetailKamar($id_kamar)
    {   
        if(session()->get('username') == ''){
            session()->setFlashdata('gagal', 'Silahkan Login terlebih dahulu!!');
            return redirect()->to(base_url('/Sign-In'));
        }
        $data=[
            'kamar' =>  $this->ListKamarModel->getListKamar($id_kamar),
            'detail' => $this->DetailKamarModel->getDetail($id_kamar),
            'no'=>$this->KamarModel -> getAllKamar($id_kamar)
        ];
        //dd($data);
        if(empty($data['detail'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('kamar tidak ditemukan');
        }
        return view('kamar/detailKamar', $data);
    }
    public function create(){
        return view('kamar/createKamar');
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
        session()->setFlashdata('pesan', 'Data Kamar berhasil ditambahkan');
        return redirect()->to(base_url('/list-kamar'));
    }

    public function delete($id_kamar){
        $id_detail = $this->DetailKamarModel->where(['id_kamar' => $id_kamar])->first();
        $this->DetailKamarModel->delete($id_detail);
        $this->ListKamarModel->delete($id_kamar);
        session()->setFlashdata('pesan', 'Data Kamar berhasil dihapus');
        return redirect()->to(base_url('/list-kamar'));
    }
    public function edit($id_kamar){
        $data = [
            'kamar' =>  $this->ListKamarModel->getListKamar($id_kamar),
            'detail' => $this->DetailKamarModel->getDetail($id_kamar)
        ];
        
        return view('kamar/editDetail', $data);
    }

    public function update($id_kamar){
        //dd($this->request->getVar());
        $this->ListKamarModel->save([
            'id_kamar' => $id_kamar,
            'jenis_kamar' => $this->request->getVar('jenis_kamar'),
            'harga' => $this->request->getVar('harga')
        ]);
        $detailKamar = $this->DetailKamarModel->where(['id_kamar' => $id_kamar])->first();
        $id_detail = $detailKamar['id_detail'];
        $this->DetailKamarModel->save([
            'id_detail' => $id_detail,
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
        session()->setFlashdata('pesan', 'Data Kamar berhasil diubah');
         $data=[
            'kamar' =>  $this->ListKamarModel->getListKamar($id_kamar),
            'detail' => $this->DetailKamarModel->getDetail($id_kamar)
        ];
        return view('kamar/detailKamar', $data);
    }
    public function book($id_kamar){
        $data=[
            'kamar' =>  $this->ListKamarModel->getListKamar($id_kamar),
            'detail' => $this->DetailKamarModel->getDetail($id_kamar)
        ];
        return view('kamar/bookKamar', $data);
    }   
     public function bukti($id_kamar){
        $data=[
            'kamar' =>  $this->ListKamarModel->getListKamar($id_kamar),
            'detail' => $this->DetailKamarModel->getDetail($id_kamar)
        ];
        return view('kamar/buktiBayar', $data);
    }

    public function noKamar(){
        $db      = \Config\Database::connect();
        $builder = $db->table('kamar');
        $builder->select('*');
        $builder->join('jenis_kamar', 'kamar.id_kamar = jenis_kamar.id_kamar');
        $query = $builder->get();
        $data=[
            'noKamar' => $this->KamarModel->getNoKamar(),
            'kamar' => $this->ListKamarModel->getListKamar(),
            'kamarno' => $query->getResultArray()
        ];
        // dd($data);
        return view('kamar/noKamar', $data);
    }

    public function tambahNokamar(){
        //dd($this->request->getVar());
        $this->KamarModel->save([
            'no_kamar'=>$this->request->getVar('no_kamar'),
            'id_kamar' => $this->request->getVar('id_kamar')
        ]);
        session()->setFlashdata('pesan', 'Nomor Kamar baru berhasil ditambahkan');
        return redirect()->to(base_url('/no-kamar'));
    }
}