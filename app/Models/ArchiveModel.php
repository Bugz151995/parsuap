<?php

namespace App\Models;

use CodeIgniter\Model;

class ArchiveModel extends Model {
  protected $table         = 'archive';
  protected $primaryKey    = 'archive_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'title',
    'intro',
    'file',
    'published_at',
    'alumni_id'
  ];
}