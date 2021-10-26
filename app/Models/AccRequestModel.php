<?php

namespace App\Models;

use CodeIgniter\Model;

class AccRequestModel extends Model {
  protected $table      = 'acc_requests';
  protected $primaryKey = 'acc_request_id';
  protected $returnType = 'array';

  protected $allowedFields = [
    'request_at',
    'token',
    'status',
    'alumni_id'
  ];
}