<?php
require_once dirname(__DIR__) . '/controllers/base_controller/BaseController.php';
require_once APP_ROOT . '/src/controllers/AuthenticationController.php';

class userDetail
{
  public $userName;
  public $realName;
  public $email;
  public $tel;

  public function __construct($uName, $rName, $email, $tel)
  {
    $this->userName = $uName;
    $this->realName = $rName;
    $this->email = $email;
    $this->tel = $tel;
  }
}

class servicesDetail
{
  public $servicesId;
  public $servicesName;
  public $servicesDesc;
  public $servicesPrice;
  public $servicesImg;

  public function __construct($id, $name, $desc, $price, $img)
  {
    $this->servicesId = $id;
    $this->servicesName = $name;
    $this->servicesDesc = $desc;
    $this->servicesPrice = $price;
    $this->servicesImg = $img;
  }
}

class billDetail
{
  public $servicesName;
  public $billId;
  public $billDate;

  public function __construct($name, $id, $date)
  {
    $this->servicesName = $name;
    $this->billId = $id;
    $this->billDate = $date;
  }
}

class customerDetail
{
  public $customerName;
  public $customerEmail;
  public $customerTel;

  public function __construct($name, $email, $tel)
  {
    $this->customerName = $name;
    $this->customerEmail = $email;
    $this->custerTel = $tel;
  }
}

class billAdminDetail
{
  public $servicesName;
  public $billId;
  public $billDate;
  public $customerInfo;

  public function __construct($sName, $id, $date, $cName, $email, $tel)
  {
    $this->servicesName = $sName;
    $this->billId = $id;
    $this->billDate = $date;
    $this->customerInfo = new customerDetail($cName, $email, $tel);
  }
}

class newsPreview
{
  public $newsTitle;
  public $newsImg;

  public function __construct($title, $img)
  {
    $this->newsTitle = $title;
    $this->newsImg = $img;
  }
}

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

    $userData = new userDetail("Try-Z", "Lô Hoàng Khôi Nguyên", "tryz@vcl.works", "0727 727 727");

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
    $billAdminList = [];

    // == TEST PURPOSE ==
    for ($i = 0; $i < 5; $i++)
      $billAdminList[$i] = new billAdminDetail("Dịch vụ tư vấn tâm lý trực tiếp", "#009849", "12/2/2022", "Lê Van Dovious Panda", "dvs_pd@ppy.sh", "0727 727 727");

    $data = array('isAdmin' => $isAdmin, 'billAdminList' => $billAdminList);
    $this->render('BillsAdminScreen', $data);
  }

  public function servicesAdmin()
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();

    $isAdmin = $_SESSION['isAdmin'];

    // A list of productsDetail given by the database
    $servicesList = [];

    // == TEST PURPOSE ==
    $servicesList[0] = new servicesDetail(
      "plan-1",
      "Dịch vụ tư vấn trực tiếp tại trung tâm",
      "60% khách hàng là bệnh nhân của chúng tôi đã quyết định đến trung tâm để tham gia vào các khóa điều trị cộng đồng. Kết quả mang lại là rất rõ rệt và được đánh giá rất cao trong số các khách hàng. Nếu bạn cảm thấy không phiền, hãy đến với trung tâm của chúng tôi để nhận được nhiều ưu đãi hơn.",
      "1.000.000VNĐ / 8 tuần điều trị",
      "https://bookingcare.vn/files/blog/2020/12/30/100527-tu-van-tam-ly.jpg"
    );

    $servicesList[1] = new servicesDetail(
      "plan2",
      "Dịch vụ tư vấn trực tuyến",
      "Trong mùa dịch bệnh đang hoành hành, nhiều khách hàng cảm thấy rất e ngại với việc tiếp xúc gần cũng như phải ra ngoài. Thấu hiểu được điều đó, mô hình chăm sóc và tư vấn sức khỏe tâm lý của khách hàng trực tuyến đã được chúng tôi triển khai và tiến hành từ rất sớm. Các bạn sẽ được cung cấp một hệ thống để liên lạc với các bác sĩ 24/7.",
      "2.000.000VNĐ / 16 tuần điều trị",
      "https://cdn.bookingcare.vn/fr/w800/2020/12/21/165610-tu-van-tam-ly-online.jpg"
    );

    $data = array('isAdmin' => $isAdmin, 'servicesList' => $servicesList);
    $this->render('ServicesAdminScreen', $data);
  }

  public function postAdmin()
  {
    AuthenticationController::requireLogin();
    AuthenticationController::requireAdminRight();

    // Variable for account type
    $isAdmin = $_SESSION['isAdmin'];


    // A list of news taken from database
    $newsList = [];

    // == TEST PURPOSE ==
    $titleList = [
      "Điều trị tâm lý cho trẻ vị thành niên - Bài toàn mới trong ngành tâm lý?",
      "Hikikomori là gì và tác động của nó đến giới trẻ Nhật Bản",
      "Trầm cảm và những biểu hiện ban đầu",
      "Trầm cảm và những biểu hiện ban đầu"
    ];

    $imgList = [
      "https://ounews.co/wp-content/uploads/2018/03/shutterstock_174741554-e1519911636917.jpg",
      "https://kenh14cdn.com/thumb_w/650/2016/hikiko-1471883423991.jpg",
      "https://vinmec-prod.s3.amazonaws.com/images/20210320_072716_425735_tram-cam.max-1800x1800.jpg",
      "https://vinmec-prod.s3.amazonaws.com/images/20210320_072716_425735_tram-cam.max-1800x1800.jpg"
    ];

    for ($i = 0; $i < 4; $i++)
      $newsList[$i] = new newsPreview($titleList[$i], $imgList[$i]);

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
