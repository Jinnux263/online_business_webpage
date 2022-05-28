<?php

// Chứa tất cả các route mà ứng dụng có trong đây


$controllers = array(
  'pages' => ['home', 'error']
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $controller = 'pages';
  $action = 'error';
}


// Sẽ xóa phần này đi, này chỉ để tạm thôi
$controller = "Authentication";
$action = "index";

// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
require_once  dirname( __DIR__ ).'/controller/' . $controller . '.php';

$klass = $controller;
$controller = new $klass;
$controller->$action();

?>