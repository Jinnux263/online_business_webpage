<?php
require_once dirname(__DIR__) . '/controllers/base_controller/BaseController.php';
require_once APP_ROOT . '/src/controllers/AuthenticationController.php';
require_once APP_ROOT . '/src/models/User.php';
require_once APP_ROOT . '/src/models/Bill.php';
require_once APP_ROOT . '/src/models/Service.php';
require_once APP_ROOT . '/src/models/News.php';


class UserController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_user';
  }

  public function index()
  {
    AuthenticationController::requireLogin();

    // Variable for account type
    $isAdmin = $_SESSION['isAdmin'];
    
    
    $userobj = new UserModel($_SESSION['user'], $_SESSION['password']);
    $userData = new userDetail($userobj->usernames, $userobj->real_name, $userobj->email, $userobj->phone_number);

    $data = array('isAdmin' => $isAdmin, 'userData' => $userData);
    $this->render('UserScreen', $data);
  }

  public function bills()
  {
    AuthenticationController::requireLogin();
    $isAdmin = $_SESSION['isAdmin'];

    // List of bills taken from database
    $billList = [];

    // == TEST PURPOSE ==
    for ($i = 0; $i < 5; $i++)
      $billList[$i] = new billDetail("Dịch vụ tư vấn tâm lý trực tiếp", "#009849", "12/2/2022");

    $data = array('isAdmin' => $isAdmin, 'billList' => $billList);
    $this->render('BillScreen', $data);
  }

  public function billsAdmin()
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();
    $isAdmin = $_SESSION['isAdmin'];

    // List of bills taken from database
    $billModel = New BillModel();
    $billAdminList = $billModel->getAll();

    $data = array('isAdmin' => $isAdmin, 'billAdminList' => $billAdminList);
    $this->render('BillsAdminScreen', $data);
  }

  public function servicesAdmin()
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();

    $isAdmin = $_SESSION['isAdmin'];

    // A list of productsDetail given by the database
    $serviceModel = New ServiceModel();
    $servicesList = $serviceModel->getAll();

    $data = array('isAdmin' => $isAdmin, 'servicesList' => $servicesList);
    $this->render('ServicesAdminScreen', $data);
  }

  public function postAdmin()
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();

    // Variable for account type
    $isAdmin = $_SESSION['isAdmin'];

    $newsModel = New ServiceModel();
    $newsList = $newsModel->getAll();

    $data = array('isAdmin' => $isAdmin, 'newsList' => $newsList);
    $this->render('PostAdminScreen', $data);
  }

  public function password()
  {
    AuthenticationController::requireLogin();
    $isAdmin = $_SESSION['isAdmin'];

    $data = array('isAdmin' => $isAdmin);
    $this->render('PasswordScreen', $data);
  }

  public function account()
  {
    AuthenticationController::requireLogin();

    // Variable for account type
    $isAdmin = $_SESSION['isAdmin'];

    $userData = new userDetail("Try-Z", "Lô Hoàng Khôi Nguyên", "tryz@vcl.works", "0727 727 727");

    $data = array('isAdmin' => $isAdmin, 'userData' => $userData);
    $this->render('UserScreen', $data);
  }


  // User quan ly post cua minh
  public function addPost($post)
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();
    $this->render('UserScreen');
  }

  public function deletePost($id)
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();
    $this->render('UserScreen');
  }

  public function modifyPost($id)
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();
    $this->render('UserScreen');
  }


  // Thay doi thong tin user
  public function modifyUser($id)
  {
    AuthenticationController::requireLogin();
    $this->render('UserScreen');
  }
}
