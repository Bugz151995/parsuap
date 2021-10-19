<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Member extends BaseController {
    public function index() {
        session()->destroy();
        helper('form');

        echo view('templates/header');
        echo view('alumni/login');
        echo view('templates/end_document');
    }

    public function view($page = NULL) {
        if ($page === NULL) {
            echo view('templates/header');
            echo view('alumni/home');
            echo view('templates/end_document');
        }
        echo view('templates/header');
        echo view('templates/topnavbar');
        echo view('alumni/'.$page);
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
            $u_model = new MemberModel();
            $data = $u_model->select('*')
                            ->where($data)
                            ->get()->getRowArray();
            
            session()->set($data);
            session()->setTempdata('islogged_in', TRUE, 43200);
            return redirect()->to('home');
        }

    }

    public function logout() {
        session()->destroy();        
        return redirect()->to('/');
    }
}
