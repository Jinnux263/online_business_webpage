<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class PostsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_post';
  }

  public function index()
  {
    $this->render('NewsScreen');
  }

  public function news()
  {
    $this->render('NewsScreen');
  }

}

?>