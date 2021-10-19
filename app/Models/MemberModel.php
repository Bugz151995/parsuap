<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberModel extends Model {
  protected $table         = 'members';
  protected $primaryKey    = 'member_id';
  protected $returnType     = 'array';

  protected $allowedFields = ['firstname', 'middlename', 'lastname', 'year_grudated', 'campus', 'email', 'password', 'address_id', 'course_id'];
}