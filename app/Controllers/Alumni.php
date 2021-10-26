<?php

namespace App\Controllers;

use App\Models\AlumniModel;
use App\Models\AccRequestModel;

class Alumni extends BaseController 
{
    /**
     * Display login form.
     *
     * @return mixed
     */
    public function index() 
    {
        session()->destroy();
        helper('form');

        echo view('templates/header');
        echo view('alumni/login');
        echo view('templates/index_footer');
    }

    /**
     * Create Account request and Display success message.
     *
     * @return mixed
     */
    public function createAccount() 
    {
        helper('form');
        $cache = \Config\Services::cache();
        $a_model = new AlumniModel();
        $r_model = new AccRequestModel();

        $alumni = [
            'fname'     => esc($cache->get('fname')),
            'lname'     => esc($cache->get('lname')),
            'birthdate' => esc($cache->get('bday')),
            'sex'       => esc($cache->get('sex')),
            'email'     => esc($cache->get('email')),
            'password'  => password_hash($cache->get('pass'), PASSWORD_DEFAULT)
        ];

        $account_created = $a_model->save($alumni);

        if ($account_created) 
        {
            $request = ['alumni_id' => $a_model->insertID()];
            $request_created = $r_model->save($request);

            if ($request_created) 
            {
                $cache->clean();
                echo view('templates/header');
                echo view('alumni/login');
                echo view('alumni/sign-up/success');
                echo view('templates/index_footer');
            }
        }
    }

    /**
     * Login to account.
     *
     * @return mixed
     */
    public function login() 
    {
        $validation = \Config\Services::validation();
        helper('form');

        if (!$this->validate($validation->getRuleGroup('login'))) 
        {
            echo view('templates/header');
            echo view('alumni/login', ['validation' => $this->validator]);
            echo view('templates/index_footer');    
        }
        else
        {
            $data = [
                'email' => esc($this->request->getPost('email'))
            ];

            $a_model = new AlumniModel();
            $user_data = $a_model->select('alumni_id')
                                 ->where($data)
                                 ->first();

            session()->set($user_data);
            session()->setTempData('alumni_is_loggedin', true, 21600); // expires in 6 hours
            return redirect()->to('home');
        }
    }

    /**
     * Logout and destroy session.
     *
     * @return mixed
     */
    public function logout() 
    {
        session()->destroy();        
        return redirect()->to('/');
    }
}
