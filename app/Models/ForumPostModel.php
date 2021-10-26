<?php

namespace App\Models;

use CodeIgniter\Model;

class ForumPostModel extends Model {
  protected $table         = 'forum_posts';
  protected $primaryKey    = 'forum_post_id';
  protected $returnType     = 'array';

  protected $allowedFields = [
    'post_code',
    'post',
    'posted_at',
    'alumni_id',
    'forum_id'
  ];

  public function getPosts($forum_id) {
    return $this->where(['forum_id' => esc($forum_id)])
                ->join('alumni', 'alumni.alumni_id = forum_posts.alumni_id')
                ->orderBy('posted_at', 'DESC')
                ->paginate(5);
  }

  public function getTotalPost() {
    return $this->select('forum.forum_id, post')
                ->join('forum', 'forum_posts.forum_id = forum.forum_id', 'right')
                ->orderBy('created_at', 'DESC')
                ->get()->getResult();
  }
}