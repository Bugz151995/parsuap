<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Home extends BaseController {
    public function index() {
      helper('form');
      $uri = service('uri');
      $data['page'] = $uri->getSegment(1);
      echo view('templates/header');
      echo view('templates/topnavbar', $data);
      echo view('alumni/home');
      echo view('templates/end_document');
    }
}
