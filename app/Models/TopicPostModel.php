<?php

namespace App\Models;

use CodeIgniter\Model;

class TopicPostModel extends Model {
  protected $table         = 'topic_posts';
  protected $primaryKey    = 'topic_post_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'post_code',
    'post',
    'posted_at',
    'alumni_id',
    'forum_id'
  ];
}