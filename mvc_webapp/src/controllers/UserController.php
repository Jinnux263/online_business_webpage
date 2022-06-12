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

}

?>