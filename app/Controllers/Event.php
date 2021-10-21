<?php

namespace App\Controllers;

use App\Models\AlumniModel;

class Event extends BaseController {
    public function index() {
      $uri = service('uri');
      $data['page'] = $uri->getSegment(1);
      echo view('templates/header');
      echo view('templates/topnavbar', $data);
      echo view('alumni/events');
      echo view('templates/end_document');
    }
}