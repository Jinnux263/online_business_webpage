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
    include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }
}

?>