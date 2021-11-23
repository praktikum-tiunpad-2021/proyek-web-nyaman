<?php 
namespace App\Models;

use CodeIgniter\Model;

class ListKamarModel extends Model{
    protected $table = 'jenis_kamar';
    protected $primaryKey = 'id_kamar';
    protected $allowedFields = ['jenis_kamar', 'harga'];

    public function getListKamar($id_kamar = false){
        if($id_kamar == false){
            return $this->findAll();
        }
        return $this->where(['id_kamar' => $id_kamar])->first();
    }
}

