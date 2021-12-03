<?php 
namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController{
    
    public function __construct(){
        helper('form');
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

    public function ViewSignIn(){
        return view('page/SignIn');
    }

    public function cek_login(){
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $this->LoginModel->cek_login($username, $password);

        
        if (($cek['username']==$username) && ($cek['password']==$password)){
            session()->set('username', $cek['username']);
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