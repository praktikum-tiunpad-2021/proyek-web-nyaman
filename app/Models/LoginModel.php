<?php 
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table = 'user';
    protected $primaryKey = 'username';

    public function cek_login($username, $password){
        return $this->db->table('user')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
    }
}
