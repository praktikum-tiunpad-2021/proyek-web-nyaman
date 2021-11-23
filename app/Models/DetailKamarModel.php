<?php 
namespace App\Models;

use CodeIgniter\Model;

class DetailKamarModel extends Model{
    protected $table = 'detail_kamar';
    protected $primaryKey = 'id_detail';
    protected $allowedFields = ['id_kamar', 'deskripsi', 'ranjang', 'luas_kamar', 'ac', 'tv', 'wifi', 'tmp_penyimpanan', 'mini_bar', 'kamar_mandi', 'hair_dryer', 'air', 'sarapan'];

    public function getDetail($id_kamar = false){
        if($id_kamar == false){
            return $this->findAll();
        }
        return $this->where(['id_kamar' => $id_kamar])->first();
    }
}