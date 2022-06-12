<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class AuthenticationController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_authentication';
  }

  public function index()
  {
    include  APP_ROOT."/public/content/login.php";
  }

  public function login()
  {
    $this->render('LoginScreen');
  }

  public function logout()
  {
    include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }

  public function register()
  {
    include  APP_ROOT."/public/content/register.php";
  }
}

?>