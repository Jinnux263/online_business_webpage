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

  public function home()
  {
     include APP_ROOT."/public/content/home.php";
  }

  public function about()
  {
     include APP_ROOT."/public/content/about.php";
  }

  public function products()
  {
    include  APP_ROOT."/public/content/products.php";
  }

  public function pricing()
  {
    include APP_ROOT."/public/content/pricing.php";
  }

  public function contact()
  {
    include  APP_ROOT."/public/content/contact.php";
  }

  public function news()
  {
    include  APP_ROOT."/public/content/news.php";
  }


}

?>