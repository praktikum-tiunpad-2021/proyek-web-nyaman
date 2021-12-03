<?php 
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{
    protected $table = 'user';
    protected $primaryKey = 'username';
    protected $allowedFields = ['first_name', 'last_name', 'alamat', 'no_hp'];

    public function cek_login($username, $password){
        return $this->db->table('user')
        ->where(array('username' => $username, 'password' => $password))
        ->get()->getRowArray();
    }

    public function getUser($username){
        if($username == false){
            return $this->findAll();
        }
        return $this->where(['username' => $username])->first();
    }
}
