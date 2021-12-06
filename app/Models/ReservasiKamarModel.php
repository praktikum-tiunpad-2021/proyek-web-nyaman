<?php 
namespace App\Models;

use CodeIgniter\Model;

class ReservasiKamarModel extends Model{
    protected $table = 'reservasi';
    protected $primaryKey = 'no_pesanan';
    protected $allowedFields = ['no_pesanan','no_kamar','username','checkin', 'checkout', 'currentTime', 'harga'];

    public function getReservasi($no_kamar = false){
        if($no_kamar == false){
            return $this->findAll();
        }
        return $this->where(['no_kamar' => $no_kamar])->first();
    }

}