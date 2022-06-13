<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class HomeController extends BaseController
{ 
  protected $DBcon;

  function __construct()
  {
    $this->folder = 'screen_homepage';
    $DB = new Database();
    $this->DBcon = $DB->getInstance();
  }

  public function index()
  {
    $this->render('MainScreen');
  }

  public function home()
  {
    $this->render('MainScreen');
  }

  public function about()
  {
    $this->render('AboutScreen');
  }

  public function contact()
  {
    $this->render('ContactScreen');
  }


}

?>