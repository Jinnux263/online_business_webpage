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

    public function bills()
    {
      $this->render('BillScreen');
    }
    
    public function billsAdmin()
    {
      $this->render('BillsAdminScreen');
    }
    
    public function servicesAdmin()
    {
      $this->render('ServicesAdminScreen');
    }
    
    public function postAdmin()
    {
      $this->render('PostAdminScreen');
    }
    
    public function password()
    {
      $this->render('PasswordScreen');
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