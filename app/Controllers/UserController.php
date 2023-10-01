<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{

    public function index()
    {
        //
    }

    public function register()
    {

        helper(['form']);

        $rules = [
            'username' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            // Validation successful, proceed to save the user data
            $userModel = new UserModel();

            $data = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->insert($data); 

            return redirect()->to('/signin');
        } else {
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }

    }


    public function LoginAuth()
    {
        $session = session();

        $userModel = new UserModel();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $userModel->where('username', $username)->first();

        if ($data) {
            
            $hashedPassword = $data['password'];
            $isPasswordCorrect = password_verify($password, $hashedPassword);

            if ($isPasswordCorrect) {
              
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);

                return redirect()->to('/profile');
            } else {
               
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        } else {

            $session->setFlashdata('msg', 'Username does not exist.');
            return redirect()->to('/signin');
        }
            }



}
