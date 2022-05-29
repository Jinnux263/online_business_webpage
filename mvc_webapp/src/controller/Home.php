<?php
require_once dirname( __DIR__ ).'/controller/base_controller/BaseController.php';

class Home extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_homepage';
  }

  public function index()
  {
    $this->render('MainScreen');
    // include dirname( __DIR__ ).'/view/screen_homepage/MainScreen.php';
  }
}

?>