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
    $data = array('brands' => $this->DBcon->query("SELECT * FROM brands"));
    $this->render('MainScreen', $data);
    // include dirname( __DIR__ ).'/views/screen_homepage/MainScreen.php';
  }
}

?>