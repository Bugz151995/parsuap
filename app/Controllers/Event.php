<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Event extends BaseController {
  public function index() {
    $uri = service('uri');
    $data['page'] = $uri->getSegment(1);
    
    echo view('templates/header');
    echo view('templates/navbar', $data);
    echo view('alumni/events');
    echo view('templates/main_footer');
  }
}