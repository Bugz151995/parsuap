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

  public function getTopic($id) {
    return $this->select('topic, forum_id')
                ->getWhere(['forum_id' => esc($id)])
                ->getRow();
  }

  public function getTopics() {
    return $this->join('alumni', 'alumni.alumni_id = forum.alumni_id')
                ->orderBy('created_at', 'DESC')
                ->paginate(8);
  }
}