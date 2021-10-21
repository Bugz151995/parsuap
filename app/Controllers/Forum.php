<?php

namespace App\Controllers;

use App\Models\AlumniModel;
use App\Models\ForumModel;
use App\Models\TopicPostModel;
use CodeIgniter\I18n\Time;

class Forum extends BaseController {
  public function index() {
    helper('form');
    $uri = service('uri');
    $f = new ForumModel();
    $tp = new TopicPostModel();
    $data['page'] = $uri->getSegment(1);
    $myTime = new Time('now', 'Asia/Manila');

    $data['topics'] = $f->join('alumni', 'alumni.alumni_id = forum.alumni_id')
                        ->orderBy('created_at', 'DESC')
                        ->paginate(8); 
                        
    $data['posts'] = $f->selectCount('topic_posts.forum_id', 'count')
                       ->join('alumni', 'alumni.alumni_id = forum.alumni_id')
                       ->join('topic_posts', 'topic_posts.forum_id = forum.forum_id')
                       ->orderBy('created_at', 'DESC')
                       ->groupBy('forum.forum_id')
                       ->get()->getResult();  
    $data['pager'] = $f->pager;
    $data['now'] = $myTime;

    echo view('templates/header');
    echo view('templates/topnavbar', $data);
    echo view('alumni/forum/forum');
    echo view('templates/end_document');
  }

  public function viewTopic($forum_id) {
    helper('form');
    $uri = service('uri');
    $f = new ForumModel();
    $tp = new TopicPostModel();
    $myTime = new Time('now', 'Asia/Manila');
    $data['page'] = $uri->getSegment(1);
    $data['posts'] = $tp->where(['forum_id' => esc($forum_id)])
                        ->join('alumni', 'alumni.alumni_id = topic_posts.alumni_id')
                        ->orderBy('posted_at', 'DESC')
                        ->paginate(5);    
    $data['pager'] = $tp->pager;  
    $data['topic'] = $f->select('topic, forum_id')->getWhere(['forum_id' => esc($forum_id)])->getRow();
    $data['now'] = $myTime;

    echo view('templates/header');
    echo view('templates/topnavbar', $data);
    echo view('alumni/forum/topic');
    echo view('templates/end_document');
  }

  public function createPost() {
    helper('form');
    $uri = service('uri');
    $f = new ForumModel();
    $tp = new TopicPostModel();
    $myTime = new Time('now', 'Asia/Manila');
    $rules = [
      'post' => [
        'label' => 'Post',
        'rules' => 'required'
      ],
    ];

    if(!$this->validate($rules)){    
      $data['page'] = $uri->getSegment(1);
      $data['posts'] = $tp->where(['forum_id' => esc($this->request->getPost('f'))])
                          ->join('alumni', 'alumni.alumni_id = topic_posts.alumni_id')
                          ->orderBy('posted_at', 'DESC')
                          ->paginate(4);    
      $data['pager'] = $tp->pager;  
      $data['topic'] = $f->select('topic, forum_id')->getWhere(['forum_id' => esc($this->request->getPost('f'))])->getRow();
      $data['now'] = $myTime;
      $data['validation'] = $this->validator;
      $data['cp_1'] = true; // create post modal is true

      echo view('templates/header');
      echo view('templates/topnavbar', $data);
      echo view('alumni/forum/topic');
      echo view('templates/end_document');
    } else {
      $t_post = [
        'post'      => esc($this->request->getPost('post')),
        'post_code' => esc('PC-'.strtotime($myTime)),
        'alumni_id' => session()->get('alumni_id'),
        'forum_id'  => esc($this->request->getPost('f')),
      ];

      $tp->save($t_post);
      session()->setTempData('success', TRUE, 3);
      session()->setTempData('msg', 'Your Post was successfully saved!', 3);
      return redirect()->to('forum/topic/'.esc($this->request->getPost('f')));
    }
  }

  public function createTopic() {
    helper('form');
    $uri = service('uri');
    $f = new ForumModel();
    $tp = new TopicPostModel();
    $myTime = new Time('now', 'Asia/Manila');
    $rules = [
      'topic' => [
        'label' => 'Topic',
        'rules' => 'required'
      ],
      'post' => [
        'label' => 'Post',
        'rules' => 'required'
      ],
    ];

    if(!$this->validate($rules)){      
      $data['page'] = $uri->getSegment(1);
      $myTime = new Time('now', 'Asia/Manila');

      $data['topics'] = $f->join('alumni', 'alumni.alumni_id = forum.alumni_id')
                          ->join('topic_posts', 'topic_posts.forum_id = forum.forum_id', 'left')
                          ->paginate(8);
      $data['pager'] = $f->pager;
      $data['now'] = $myTime;
      $data['validation'] = $this->validator;
      $data['ct_1'] = true; // create topic modal is true

      echo view('templates/header');
      echo view('templates/topnavbar', $data);
      echo view('alumni/forum/forum');
      echo view('templates/end_document');
    } else {
      $forum = [
        'topic'     => esc($this->request->getPost('topic')),
        'status'    => 0,
        'alumni_id' => session()->get('alumni_id'),
      ];

      $f->save($forum);

      $forum_id = $f->insertID();

      $t_post = [
        'post'      => esc($this->request->getPost('post')),
        'post_code' => esc('PC-'.strtotime($myTime)),
        'alumni_id' => session()->get('alumni_id'),
        'forum_id'  => $forum_id,
      ];

      $tp->save($t_post);
      session()->setTempData('success', TRUE, 3);
      session()->setTempData('msg', 'The Topic was successfully added!', 3);
      return redirect()->to('forum');
    }
  }
}
