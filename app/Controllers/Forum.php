<?php

namespace App\Controllers;

use App\Models\AlumniModel;
use App\Models\ForumModel;
use App\Models\ForumPostModel;
use CodeIgniter\I18n\Time;

class Forum extends BaseController 
{
  /**
   * Display a listing of the topics.
   *
   * @return mixed
   */
  public function index() 
  {
    helper('form');
    $uri = service('uri');
    $f   = new ForumModel();
    $fp  = new ForumPostModel();

    $data = [
      'page'   => $uri->getSegment(1),
      'topics' => $f->getTopics(),
      'posts'  => $fp->getTotalPost(),
      'pager'  => $f->pager,
      'now'    => new Time('now', 'Asia/Manila')                                        
    ];

    echo view('templates/header');
    echo view('templates/navbar', $data);
    echo view('alumni/forum/topic');
    echo view('templates/main_footer');
  } 

  /**
   * Display a specified topic.
   *
   * @param int $forum_id
   * @return mixed
   */
  public function viewPosts($forum_id) 
  {
    helper('form');
    $uri = service('uri');
    $f   = new ForumModel();
    $fp  = new ForumPostModel();

    $data = [
      'page'  => $uri->getSegment(1),
      'topic' => $f->getTopic($forum_id),
      'posts' => $fp->getPosts($forum_id),
      'pager' => $fp->pager,
      'now'   => new Time('now', 'Asia/Manila')                                        
    ];

    echo view('templates/header');
    echo view('templates/navbar', $data);
    echo view('alumni/forum/post');
    echo view('templates/main_footer');
  }

  /**
   * Create a post in a specified topic.
   *
   * @return mixed
   */
  public function createPost() 
  {
    $validation = \Config\Services::validation();
    helper('form');
    $uri = service('uri');
    $f   = new ForumModel();
    $fp  = new ForumPostModel();

    if(!$this->validate($validation->getRuleGroup('forum_topic')))
    { 
      session()->setTempData('warning', TRUE, 1);
      session()->setTempData('msg', 'Please don\'t leave a blank field in the Create Post form.', 1);
      return redirect()->to('forum/topic/'.esc($this->request->getPost('f')));
    } 
    else 
    {
      $t_post = [
        'post'      => esc($this->request->getPost('post')),
        'post_code' => esc('PC-'.strtotime(new Time('now', 'Asia/Manila'))),
        'alumni_id' => session()->get('alumni_id'),
        'forum_id'  => esc($this->request->getPost('f')),
      ];

      $fp->save($t_post);
      session()->setTempData('success', TRUE, 3);
      session()->setTempData('msg', 'Your Post was successfully saved!', 3);
      return redirect()->to('forum/topic/'.esc($this->request->getPost('f')));
    }
  }

  /**
   * Create a topic.
   *
   * @return mixed
   */
  public function createTopic() 
  {
    $validation = \Config\Services::validation();
    helper('form');
    $uri = service('uri');
    $f = new ForumModel();
    $fp = new ForumPostModel();

    if(!$this->validate($validation->getRuleGroup('forum_topic')))
    { 
      session()->setTempData('warning', TRUE, 1);
      session()->setTempData('msg', 'Please don\'t leave a blank field in the create topic form.', 1);
      return redirect()->to('forum');
    } 
    else 
    {
      $forum_topic = [
        'topic'     => esc($this->request->getPost('topic')),
        'status'    => 0,
        'alumni_id' => session()->get('alumni_id'),
      ];

      $f->save($forum_topic);

      $t_post = [
        'post'      => esc($this->request->getPost('post')),
        'post_code' => esc('PC-'.strtotime(new Time('now', 'Asia/Manila'))),
        'alumni_id' => session()->get('alumni_id'),
        'forum_id'  => $f->insertID(),
      ];

      $fp->save($t_post);
      session()->setTempData('success', TRUE, 1);
      session()->setTempData('msg', 'The Topic was successfully added!', 1);
      return redirect()->to('forum');
    }
  }
}
