<?php
session_start();

require_once dirname( __DIR__ ).'/src/includes/conn.php';

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
require_once dirname( __DIR__ ).'/src/routes/Routes.php';


?>