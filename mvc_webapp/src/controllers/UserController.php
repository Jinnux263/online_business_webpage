<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class UserController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_authentication';
  }

  public function index()
  {
    include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }

  public function login()
  {
    include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }

  public function logout()
  {
    include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }

  public function register()
  {
    include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }

}

?>