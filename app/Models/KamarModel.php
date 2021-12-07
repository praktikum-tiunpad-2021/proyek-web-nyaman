<?php 
namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model{
    protected $table = 'kamar';
    protected $primaryKey = 'no_kamar';
    protected $allowedFields = ['id_kamar', 'no_kamar'];
    protected $useAutoIncrement = false;

    public function getNoKamar($id_kamar = false){
        if($id_kamar == false){
            return $this->findAll();
        }
        return $this->where(['id_kamar' => $id_kamar])->first();
    } public function getAllKamar($id_kamar = false){
        if($id_kamar == false){
            return $this->findAll();
        }
        return $this->where(['id_kamar' => $id_kamar])->findAll();;
    }

}