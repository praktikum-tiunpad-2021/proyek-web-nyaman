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
        // $profilePhoto = $this->request->getFile('profile_photo');
        // $profilePhoto->move(WRITEPATH.'images')
        
        // $this->user->save([
        // 'profilePhoto' => $profilePhoto->getName(),
        // ]);

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

    public function viewSignUp()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('page/SignUp', $data);
    }

    public function register(){
        //dd($this->request->getVar());
        if (!$this->validate([
            'username' => [
                'rules' => 'required|is_unique[user.username]|alpha_dash|max_length[20]|min_length[5]',
                'errors' => [
                    'required' => 'username harus diisi!',
                    'is_unique' => 'username sudah terdaftar!',
                    'alpha_space' => 'input hanya dapat berupa huruf, angka, _, dan -',
                    'max_length' => 'input harus kurang dari 20 karakter',
                    'min_length' => 'input harus lebih dari 5 karakter',
                ]
            ],
            'first_name' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'first name harus diisi!',
                    'alpha_space' => 'input harus berupa huruf!'
                ]
            ],
            'last_name' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'last name harus diisi!',
                    'alpha_space' => 'input harus berupa huruf!'
                ]
            ],
            'email' => [
                'rules'=>'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => 'email kamar harus diisi!',
                    'valid_email' => 'masukkan alamat email yang benar!',
                    'is_unique' => 'alamat email sudah terdartar!',
                ]
            ],
            'password' => [
                'rules'=>'required|max_length[16]|min_length[8]',
                'errors' => [
                    'required' => 'password harus diisi!',
                    'max_length'  => 'password harus berisi 8-16 karakter!', 
                    'min_length' => 'password harus berisi 8-16 karakter!'
                ]
            ],
            'confirm' => [
                'rules'=>'required|matches[password]',
                'errors' => [
                    'required' => 'password harus diisi!',
                    'matches' => 'password doesnt match!'
                ]
            ],
            'no_hp' => [
                'rules'=>'required|max_length[13]|min_length[10]|is_unique[user.no_hp]',
                'errors' => [
                    'required' => 'nomor hp kamar harus diisi!',
                    'min_length' => 'masukkan nomor hp yang benar!',
                    'max_length' => 'masukkan nomor hp yang benar!',
                    'is_unique' => 'nomor hp sudah terdartar!',
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            //dd($validation);
            return redirect()->to(base_url('/Sign-Up'))->withInput()->with('validation', $validation );
        }
        $this->LoginModel->save([
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'first_name' => $this->request->getVar('first_name'),
            'last_name' => $this->request->getVar('last_name'),
            'no_hp' => $this->request->getVar('no_hp'),
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