<?php
require_once dirname( __DIR__ ).'/controller/base_controller/BaseController.php';

class User extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
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