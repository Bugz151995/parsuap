<?php

namespace App\Models;

use CodeIgniter\Model;

class AlumniModel extends Model {
  protected $table         = 'alumni';
  protected $primaryKey    = 'alumni_id';
  protected $returnType     = 'array';

  protected $allowedFields = ['firstname', 'middlename', 'lastname', 'year_grudated', 'campus', 'email', 'password', 'address_id', 'course_id'];
}