<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class AuthenticationController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_user';
  }

  public function index()
  {
    $this->render('UserScreen');
  }


  // Admin quan ly user
  public function addUser($post)
    {
      $this->render('UserScreen');
    }
  
  public function deleteUser($id)
  {
    $this->render('UserScreen');
  }
  
  public function modifyUser($id)
  {
    $this->render('UserScreen');
  }

  // Admin quan ly post
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

  //quan ly service
  public function addService($service)
  {
    $this->render('UserScreen');
  }

  public function deleteService($id)
  {
    $this->render('UserScreen');
  }

  public function modifyService($id)
  {
    $this->render('UserScreen');
  }


}

?>