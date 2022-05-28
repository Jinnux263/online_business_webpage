<?php
require_once dirname( __DIR__ ).'/controller/base_controller/BaseController.php';

class Authentication extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function index()
  {
    include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }
}

?>