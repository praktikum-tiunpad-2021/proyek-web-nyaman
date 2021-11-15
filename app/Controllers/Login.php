<?php 
namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController{
    public function __construct(){
        helper('form');
        $this->LoginModel = new LoginModel();
    }

    public function ViewSignIn(){
        return view('page/SignIn');
    }

    public function cek_login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $remember=$this->request->getPost('remember');
        $cek = $this->LoginModel->cek_login($username, $password);

        if (($cek['username']==$username) && ($cek['password']==$password)){
            session()->set('username', $cek['username']);
            session()->set('first_name', $cek['first_name']);
            session()->set('last_name', $cek['last_name']);
            session()->set('email', $cek['email']);
            session()->set('no_hp', $cek['no_hp']);
            session()->set('role', $cek['role']);
            session()->markAsTempdata('login', 120);
            return redirect()->to(base_url('/'));
        }if ($remember){
           $time = time();
           set_cookie('login', $username, $time + 3600);
        }
        else{
            session()->setFlashdata('gagal', 'Username atau Password Salah!!');
            return redirect()->to(base_url('/Sign-In'));
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('/Sign-In'));
    }

}
?>