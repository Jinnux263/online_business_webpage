<?php
session_start();

require_once __DIR__.'/../config/Constants.php';
require_once APP_ROOT.'/src/core/Database.php';
require_once APP_ROOT.'/src/controllers/AuthenticationController.php';

// $_SESSION['user'] = 'user';
// $_SESSION['password'] = 'password';


// Kiem tra phien coi user co dang nhap
if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
  // Check coi user con dung voi tai khoan nay khong
  $checked = AuthenticationController::checkAccount($_SESSION['user'], $_SESSION['password']);
  if ($checked) {
  // Tao bien luu thong tin user de su dung, dat bien de check coi da dang nhap hay chua
    $_SESSION['authenticated'] = true;
  } else {
    $_SESSION['authenticated'] = false;
    unset($_SESSION['user']);
    unset($_SESSION['password']);
  }
} else {
  $_SESSION['authenticated'] = false;
}



// Kiem tra controller voi action
if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'HomeController';
  $action = 'index';
}

// Chay yeu cau cua user
require_once APP_ROOT.'/src/routes/Routes.php';


?>