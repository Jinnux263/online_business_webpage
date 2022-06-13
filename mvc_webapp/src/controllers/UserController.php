<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class UserController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_user';
  }

  public function index()
  {
    $this->render('UserScreen');
  }
  
    public function account()
    {
      $this->render('UserScreen');
    }
    

    // User quan ly post cua minh
    public function addPost($post)
    {
      $this->render('UserScreen');
    }
  
    public function deletePost($id)
    {
      $this->render('UserScreen');
    }

    public function modifyPost($id)
    {
      $this->render('UserScreen');
    }


    // Thay doi thong tin user
    public function modifyUser($id)
    {
      $this->render('UserScreen');
    }
  
}

?>