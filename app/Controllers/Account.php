<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Account extends BaseController {
    public function index() {
      helper('form');
      $uri = service('uri');
      $data['page'] = $uri->getSegment(1);
      echo view('templates/header');
      echo view('templates/navbar', $data);
      echo view('alumni/account');
      echo view('templates/main_footer');
    }
}
