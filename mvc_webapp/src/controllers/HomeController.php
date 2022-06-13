<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';
require_once APP_ROOT . '/src/models/About.php';
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

  // A list of aboutDetail given by the database
  $aboutsModel = new AboutModel();
  $aboutList = $aboutsModel->getAll();

    $data = array('aboutList' => $aboutList);
    $this->render('AboutScreen', $data);
  }



  // Chua xong
  public function contact()
  {
    if (false) {

    } else {
      $this->render('ContactScreen');
    }
  }


}

?>