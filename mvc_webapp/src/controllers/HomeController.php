<?php
require_once dirname( __DIR__ ).'/controllers/base_controller/BaseController.php';

class aboutDetail {
  public $aboutHeader;
  public $aboutDesc;
  public $aboutImg;

  public function __construct($header, $desc, $img)
  {
      $this->aboutHeader = $header;
      $this->aboutDesc = $desc;
      $this->aboutImg = $img;
  }
}
class HomeController extends BaseController
{ 
  protected $DBcon;

  function __construct()
  {
    $this->folder = 'screen_homepage';
    $DB = new Database();
    $this->DBcon = $DB->getInstance();
  }

  public function index()
  {
    $this->render('MainScreen');
  }

  public function home()
  {
    $this->render('MainScreen');
  }

  public function about()
  {

  // A list of aboutDetail given by the database
  $aboutList = [];

  // == TEST PURPOSE ==
  $headerList = [
      "Chúng tôi là người bạn đồng hành của các bạn",
      "Bạn không ở một mình trong chuyến đi này",
      "Hãy tin tưởng vào các bác sĩ của chúng tôi"
  ];

  $descList = [
      "Chúng tôi làm việc với phương châm: \"Không bỏ lại bệnh nhân nào ở phía sau\". Bằng phương pháp điều trị tích cực và đầy tính hiệu quả của chúng tôi, chúng tôi sẽ không để bệnh nhân nào phải gặp khó khăn trong cuộc sống.",
      "Ngoài các bác sĩ là người đồng hành, bệnh nhân còn được tham gia vào các chương trình điều trị cộng đồng nhằm giúp bệnh nhân lấy lại tự tin của bản thân, mở lòng hơn với xã hội cũng như mang đến sự gắn kết cho mọi người.",
      "Các bác sĩ thuộc trung tâm tư vấn của chung tôi đều là những chuyên gia tư vấn tâm lý xuất sắc, có thâm niên trong ngành. Khi đến với chúng tôi, bạn không cần phải lo lắng về chất lượng tư vấn của các bác sĩ ở đây. Đối với chúng tôi, các bệnh nhân như là những người bạn."
  ];
  
  $imgList = [
      "https://www.studentdoctor.net/wp-content/uploads/2019/11/AdobeStock_265652380.jpg",
      "https://www.cffhae.org/wp-content/uploads/2014/07/Happy-Patient-1024x683.jpg",
      "https://i0.wp.com/post.psychcentral.com/wp-content/uploads/sites/4/2021/09/close-up-mental-health-professional-therapist-clipboard-taking-notes-counseling-1296x728-header-1024x575.jpg?w=1155&h=1528"
  ];

  for ($i = 0; $i < 3; $i++)
      $aboutList[$i] = new aboutDetail($headerList[$i], $descList[$i], $imgList[$i]);

    $data = array('aboutList' => $aboutList);
    $this->render('AboutScreen', $data);
  }



  // Chua xong
  public function contact()
  {
    if (false) {

    } else {
      $this->render('ContactScreen');
    }
  }


}

?>