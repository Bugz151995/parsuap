<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Registration extends BaseController 
{
  /**
   * Display the registration form.
   *
   * @return mixed
   */
  public function view($page) 
  {
    $cache = \Config\Services::cache();
    helper('form');

    $data = [
      'cache' => $cache
    ];
    echo view('templates/header');
    echo view('alumni/login');
    echo view('alumni/sign-up/'.$page, $data);
    echo view('templates/index_footer');
  }

  /**
   * Get the alumni name and save to cache.
   * expires in 15 minutes.
   *
   * @return mixed
   */
  public function getName() 
  {
    $cache = \Config\Services::cache();
    $validation = \Config\Services::validation();
    helper('form');

    if (!$this->validate($validation->getRuleGroup('signup_name'))) {
      $data = [
        'validation' => $this->validator,
        'cache' => $cache
      ];

      echo view('templates/header');
      echo view('alumni/login');
      echo view('alumni/sign-up/name', $data);
      echo view('templates/index_footer');
    } else {
      cache()->save('fname', $this->request->getPost('fname'), 900);
      cache()->save('lname', $this->request->getPost('lname'), 900);
      return redirect()->to('registration/batch_type');
    }
  }

  /**
   * Get the alumni batch type and save to cache.
   * expires in 15 minutes.
   *
   * @return mixed
   */
  public function getBatchType() 
  {
    $cache = \Config\Services::cache();
    $validation = \Config\Services::validation();
    helper('form');

    if (!$this->validate($validation->getRuleGroup('signup_bt'))) {
      $data = [
        'validation' => $this->validator,
        'cache' => $cache
      ];

      echo view('templates/header');
      echo view('alumni/login');
      echo view('alumni/sign-up/batch_type', $data);
      echo view('templates/index_footer');
    } else {
      cache()->save('batch_type', $this->request->getPost('batch_type'), 900);
      return redirect()->to('registration/year');
    }
  }
  
  /**
   * Get the alumni batch year and save to cache.
   * expires in 15 minutes.
   *
   * @return mixed
   */
  public function getBatchYear() 
  {
    $cache = \Config\Services::cache();
    $validation = \Config\Services::validation();
    helper('form');

    $batch_type = $cache->get('batch_type');

    $rules = null;

    switch ($batch_type) {
      case 'college':
        $rules = 'signup_year_c';
        break;
      case 'high_school':
        $rules = 'signup_year_h';
        break;      
      default:
        $rules = 'signup_year_b';
        break;
    }
    
    if (!$this->validate($validation->getRuleGroup($rules))) {
      $data = [
        'validation' => $this->validator,
        'cache' => $cache
      ];

      echo view('templates/header');
      echo view('alumni/login');
      echo view('alumni/sign-up/year', $data);
      echo view('templates/index_footer');
    } else {
      switch ($batch_type) {
        case 'college':
          cache()->save('c_year', $this->request->getPost('c_year'), 900);
          break;
        case 'high_school':
          cache()->save('h_year', $this->request->getPost('h_year'), 900);
          break;      
        default:
          cache()->save('c_year', $this->request->getPost('c_year'), 900);
          cache()->save('h_year', $this->request->getPost('h_year'), 900);
          break;
      }
      return redirect()->to('registration/bday');
    }
  }
  
  /**
   * Get the alumni Birthdate and save to cache.
   * expires in 15 minutes.
   *
   * @return mixed
   */
  public function getBirthdate() 
  {
    $cache = \Config\Services::cache();
    $validation = \Config\Services::validation();
    helper('form');

    if (!$this->validate($validation->getRuleGroup('signup_bday'))) {
      $data = [
        'validation' => $this->validator,
        'cache' => $cache
      ];

      echo view('templates/header');
      echo view('alumni/login');
      echo view('alumni/sign-up/bday', $data);
      echo view('templates/index_footer');
    } else {
      cache()->save('bday', $this->request->getPost('bday'), 900);
      return redirect()->to('registration/gender');
    }
  }
  
  /**
   * Get the alumni Gender and save to cache.
   * expires in 15 minutes.
   *
   * @return mixed
   */
  public function getGender() 
  {
    $cache = \Config\Services::cache();
    $validation = \Config\Services::validation();
    helper('form');

    if (!$this->validate($validation->getRuleGroup('signup_sex'))) {
      $data = [
        'validation' => $this->validator,
        'cache' => $cache
      ];

      echo view('templates/header');
      echo view('alumni/login');
      echo view('alumni/sign-up/gender', $data);
      echo view('templates/index_footer');
    } else {
      cache()->save('sex', $this->request->getPost('sex'), 900);
      return redirect()->to('registration/email');
    }
  }

  /**
   * Get the alumni Email and save to cache.
   * expires in 15 minutes.
   *
   * @return mixed
   */
  public function getEmail() 
  {
    $cache = \Config\Services::cache();
    $validation = \Config\Services::validation();
    helper('form');

    if (!$this->validate($validation->getRuleGroup('signup_email'))) {
      $data = [
        'validation' => $this->validator,
        'cache' => $cache
      ];

      echo view('templates/header');
      echo view('alumni/login');
      echo view('alumni/sign-up/email', $data);
      echo view('templates/index_footer');
    } else {
      cache()->save('email', $this->request->getPost('email'), 900);
      return redirect()->to('registration/pass');
    }
  }

  /**
   * Get the alumni Password and save to cache.
   * expires in 15 minutes.
   *
   * @return mixed
   */
  public function getPassword() 
  {
    $cache = \Config\Services::cache();
    $validation = \Config\Services::validation();
    helper('form');

    if (!$this->validate($validation->getRuleGroup('signup_pass'))) {
      $data = [
        'validation' => $this->validator,
        'cache' => $cache
      ];

      echo view('templates/header');
      echo view('alumni/login');
      echo view('alumni/sign-up/pass', $data);
      echo view('templates/index_footer');
    } else {
      cache()->save('pass', $this->request->getPost('pass'), 900);
      return redirect()->to('registration/account/submit');
    }
  }
}
