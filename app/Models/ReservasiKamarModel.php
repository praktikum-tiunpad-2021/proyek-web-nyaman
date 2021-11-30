<?php 
namespace App\Models;

use CodeIgniter\Model;

class ReservasiKamarModel extends Model{
    protected $table = 'reservasi';
    protected $primaryKey = 'no_pesanan';
    protected $useAutoIncrement = false;
    protected $allowedFields = ['no_pesanan','no_kamar','username','checkin', 'checkout', 'currentTime', 'harga'];

    public function getReservasi($no_pesanan = false){
        if($no_pesanan == false){
            return $this->findAll();
        }
        return $this->where(['no_pesanan' => $no_pesanan])->first();
    }

}