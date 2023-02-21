<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\BaseController;
use App\Models\UserModel;

class C_Auth extends BaseController
{

    public function index()
    {
        // helper(['form']);
        // echo view('login');
        return view('Mahasiswa/P_Login');
    }

    public function auth()
    {
        // DD($this->request->getVar('email'));
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        // DD($this->request->getVar('password'));
        $data = $model->findByEmail($username);
        if ($data) {
            $pass = $data['password'];
            $verify_pass = $model->verifyPassword($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'username'     => $data['username'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/Mahasiswa');
            } else {
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
        // if (session()->get('logged_in')) {
        //     dd('logged in');
        // } else {
        //     dd('not logged in');
        // }
    }
}
