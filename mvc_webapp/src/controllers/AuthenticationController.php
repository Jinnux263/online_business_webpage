<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';
require_once APP_ROOT . '/src/models/User.php';

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
    $this->requireLogin();

    // Check du lieu gui len, neu khong thi quay ve trang dang nhap
    if (isset($_POST['user']) && isset($_POST['password'])) {
      $username = $_POST['user'];
      $password = $_POST['password'];

      // Check  the username, return result

      $user = new UserModel($username, $password);
      $result = $user -> login();

      if ($result) {
        $_SESSION['user'] = $username;
        $_SESSION['password'] = $password;

        header('Location:/mvc_webapp/public/index.php');
      } else {
        header('Location:/mvc_webapp/public/index.php?controller=AuthenticationController&action=index');
      }
    } else {
      header('Location:/mvc_webapp/public/index.php?controller=AuthenticationController&action=index');
    }
  }



  public function logout()
  {
    $this->requireAuthenticated();

    if (isset($_SESSION['user'])) {
      unset($_SESSION['user']);
    }

    if (isset($_SESSION['password'])) {
      unset($_SESSION['password']);
    }

    $_SESSION['authenticated'] = false;

    header('Location:/mvc_webapp/public/index.php');
  }



  public function register()
  {
    $this->requireLogin();

      // Check ca 4 truong gui len cua form

    if (false) {
      // Dang ky tai khoan va chuyen huong toi trang login

      header('Location:/mvc_webapp/public/index.php?controller=AuthenticationController&action=index');
    } else {
      $this->render('RegisterScreen');
    }
  }

  // Kiem tra coi user co trong he thong khong
  static function requireLogin() {
    if (!$_SESSION['authenticated']) {
      header('Location:/mvc_webapp/public/index.php?controller=AuthenticationController&action=index');
      return;
    }
  }

  static function requireAdminRight() {
    if (!$_SESSION['isAdmin']) {
      header('Location:/mvc_webapp/public/index.php');
      return;
    }
  }

  // static function checkAccount($username, $password) {
  //   $authenobj = new UserModel($username, $password);
  //   return $authenobj->login();
  // }

  function requireAuthenticated() {
    if (!$_SESSION['authenticated']) {
      header('Location:/mvc_webapp/public/index.php');
      return;
    }
  }
}

?>