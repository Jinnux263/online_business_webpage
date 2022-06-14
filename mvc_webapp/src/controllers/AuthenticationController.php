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
    $this->requireAuthenticated();

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
    $this->requireAuthenticated();

      // Check ca 4 truong gui len cua form
      if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['confirm_pwd'])) {
        $username = $_POST['user'];
        $password = $_POST['pwd'];
        $password2 = $_POST['confirm_pwd'];

        $email = $_POST['email'];
        $name = "Nguyen Van A";

        if ($password != $password2) {
          $this->render('RegisterScreen');
          return;
        }
        
        
        $user = new UserModel($username, $password);
        $result = $user -> register($email, $name);

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
    if ($_SESSION['authenticated']) {
      header('Location:/mvc_webapp/public/index.php');
      return;
    }
  }
}

?>