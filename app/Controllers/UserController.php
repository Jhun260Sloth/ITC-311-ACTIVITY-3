<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        helper(['form']);

        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.username]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->insert($data);

            return redirect()->to('/Login');
        } else {
            return view('sign');
        }
    }


    public function login()
    {
        helper(['form']);

        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {

                return redirect()->to('/Admin');
            } else {
                return redirect()->to('/Login')->with('error', 'Invalid username or password');
            }
        } else {
            return view('Login');
        }
    }
}
