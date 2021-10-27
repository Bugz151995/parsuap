<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model {
  protected $table         = 'alumni';
  protected $primaryKey    = 'alumni_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'fname', 
    'profile',
    'lname', 
    'birthdate', 
    'sex', 
    'cp_num', 
    'email', 
    'password'
  ];
}