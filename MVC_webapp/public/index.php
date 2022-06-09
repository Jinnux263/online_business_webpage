<?php
session_start();

require_once __DIR__ .'/../config/Constants.php';
// require_once APP_ROOT.'/../core/Database.php';
require_once APP_ROOT.'/core/Database.php';

if (isset($_GET['controller'])) {
  $controller = $_GET['controller'];
  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = 'index';
  }
} else {
  $controller = 'Home';
  $action = 'index';
}
require_once APP_ROOT.'/src/routes/Routes.php';


?>