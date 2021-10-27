<?php

namespace App\Controllers;

use App\Models\AlumniModel;

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
