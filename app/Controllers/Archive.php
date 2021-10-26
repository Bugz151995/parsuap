<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Archive extends BaseController {
    public function index() {
      helper('form');
      $uri = service('uri');
      $data['page'] = $uri->getSegment(1);
      echo view('templates/header');
      echo view('templates/navbar', $data);
      echo view('alumni/archive');
      echo view('templates/main_footer');
    }
}
