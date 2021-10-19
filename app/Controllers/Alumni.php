<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Alumni extends BaseController {
    public function index() {
        session()->destroy();
        helper('form');

        echo view('templates/header');
        echo view('alumni/login');
        echo view('templates/end_document');
    }

    public function login() {
        $validation = \Config\Services::validation();
        helper('form');

        if (!$this->validate($validation->getRuleGroup('login'))) {
        
            echo view('templates/header');
            echo view('alumni/login', ['validation' => $this->validator]);
            echo view('templates/end_document');    
        } else {
            $data['email'] = esc($this->request->getPost('email'));
            $u_model = new AlumniModel();
            $data = $u_model->select('*')
                            ->where($data)
                            ->get()->getRowArray();
            
            session()->set($data);
            session()->setTempdata('alumni_is_loggedin', TRUE, 43200);
            return redirect()->to('home');
        }

    }

    public function logout() {
        session()->destroy();        
        return redirect()->to('/');
    }
}
