<?php

namespace App\Controllers;

use App\Models\MemberModel;

class Archive extends BaseController {
    public function index() {
      $uri = service('uri');
      $data['page'] = $uri->getSegment(1);
      echo view('templates/header');
      echo view('templates/topnavbar', $data);
      echo view('alumni/archive');
      echo view('templates/end_document');
    }
}
