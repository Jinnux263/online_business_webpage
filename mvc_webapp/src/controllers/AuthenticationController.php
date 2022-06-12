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
    $this->render('LoginScreen');
  }

  public function login()
  {
    $username = $_POST['user'];
    $password = $_POST['password'];

    // Check  the username, return result
    $result = true;

    if ($result) {
      $_SESSION['user'] = $username;
      $_SESSION['password'] = $password;

      header('Location:/mvc_webapp/public/index.php');
    }
  }

  public function logout()
  {
    if (isset($_SESSION['user'])) {
      unset($_SESSION['user']);
      unset($_SESSION['password']);
    }
    header('Location:/mvc_webapp/public/index.php');
  }

  public function register()
  {
    include  APP_ROOT."/public/content/register.php";
  }
}

?>