<?php 
namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController{
    protected $LoginModel;
    public function __construct(){
        $this->LoginModel = new LoginModel();
    }
    public function viewProfil(){
        if(session()->get('username') == ''){
            session()->setFlashdata('gagal', 'Silahkan Login terlebih dahulu!!');
            return redirect()->to(base_url('/Sign-In'));
        }
        $username = session()->get('username');
        $data=[
            'user' => $this->LoginModel->getUser($username)
        ];
        //dd($data);
        
        return view('page/Profil', $data);
    }
    public function editProfil(){
        if(session()->get('username') == ''){
            session()->setFlashdata('gagal', 'Silahkan Login terlebih dahulu!!');
            return redirect()->to(base_url('/Sign-In'));
        }
        $username = session()->get('username');
        $data=[
            'user' => $this->LoginModel->getUser($username)
        ];

        //dd($data);
        return view('page/editProfil', $data);
    }

    public function update($username){
        //dd($this->request->getVar());
        $this->LoginModel->save([
            'username' => $username,
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);
        return redirect()->to(base_url('/Profil'));
    }

    public function index(){
        return view('page/SignIn');
    }

    public function register(){
        //dd($this->request->getVar());
        $this->LoginModel->save([
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'first_name' => $this->request->getVar('fname'),
            'last_name' => $this->request->getVar('lname'),
            'no_hp' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email'),
            'role' => 'tamu'
        ]);
        return redirect()->to(base_url('/Login'));
    }

    public function cek_login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $this->LoginModel->cek_login($username, md5($password));

        if (($cek['username']==$username) && ($cek['password'] == md5($password))){
            session()->set('username', $cek['username']);
            session()->set('first_name', $cek['first_name']);
            session()->set('last_name', $cek['last_name']);
            session()->set('role', $cek['role']);
            return redirect()->to(base_url('/'));
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