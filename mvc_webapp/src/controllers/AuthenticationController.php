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
    if ($_SESSION['authenticated']) {
      header('Location:/mvc_webapp/public/index.php');
    } else {

      // Check du lieu gui len, neu khong thi quay ve trang dang nhap
      if (isset($_POST['user']) && isset($_POST['password'])) {
        $username = $_POST['user'];
        $password = $_POST['password'];

        // Check  the username, return result
        $result = true;

        if ($result) {
          $_SESSION['user'] = $username;
          $_SESSION['password'] = $password;

          header('Location:/mvc_webapp/public/index.php');
        }
      } else {
        header('Location:/mvc_webapp/public/index.php?controller=AuthenticationController&action=index');
      }
    }
  }



  public function logout()
  {
    if (isset($_SESSION['user'])) {
      unset($_SESSION['user']);
      unset($_SESSION['password']);
      $_SESSION['authenticated'] = false;
    }
    header('Location:/mvc_webapp/public/index.php');
  }



  public function register()
  {
    if ($_SESSION['authenticated']) {
      header('Location:/mvc_webapp/public/index.php');
    } else {
      // Check ca 4 truong gui len cua form

      if (false) {
        // Dang ky tai khoan va chuyen huong toi trang login

        header('Location:/mvc_webapp/public/index.php?controller=AuthenticationController&action=index');
      } else {
        $this->render('RegisterScreen');
      }
    }
  }

  // Kiem tra coi user co trong he thong khong
  static function checkAccount($username, $password) {
    return true;
  }
}

?>