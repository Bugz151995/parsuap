<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumModel extends Model {
  protected $table         = 'forum';
  protected $primaryKey    = 'forum_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'topic',
    'created_at',
    'status',
    'alumni_id'
  ];
}