<?php
require_once dirname(__DIR__) . '/controllers/base_controller/BaseController.php';


// Prototype for a product detail, which includes doctor's name, description, price and image.
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

// Prototype for a services detail, which includes the header, description and image.
class docDetail
{
  public $docName;
  public $docDesc;
  public $docImg;

  public function __construct($name, $desc, $img)
  {
    $this->docName = $name;
    $this->docDesc = $desc;
    $this->docImg = $img;
  }
}

class ProductDetailController extends BaseController
{
  function __construct()
  {
    $this->folder = 'screen_product';
  }

  public function index()
  {
    $this->render('ProductScreen');
  }

  public function pricing()
  {
    // A list of productsDetail given by the database
    $servicesList = [];

    // == TEST PURPOSE ==
    $idList = [
      "plan-1",
      "plan-2",
      "plan-3"
    ];

    $nameList = [
      "Dịch vụ tư vấn trực tiếp tại trung tâm",
      "Dịch vụ tư vấn trực tuyến",
      "Dịch vụ tư vấn tại gia"
    ];

    $descList = [
      "60% khách hàng là bệnh nhân của chúng tôi đã quyết định đến trung tâm để tham gia vào các khóa điều trị cộng đồng. Kết quả mang lại là rất rõ rệt và được đánh giá rất cao trong số các khách hàng. Nếu bạn cảm thấy không phiền, hãy đến với trung tâm của chúng tôi để nhận được nhiều ưu đãi hơn.",
      "Trong mùa dịch bệnh đang hoành hành, nhiều khách hàng cảm thấy rất e ngại với việc tiếp xúc gần cũng như phải ra ngoài. Thấu hiểu được điều đó, mô hình chăm sóc và tư vấn sức khỏe tâm lý của khách hàng trực tuyến đã được chúng tôi triển khai và tiến hành từ rất sớm. Các bạn sẽ được cung cấp một hệ thống để liên lạc với các bác sĩ 24/7.",
      "\"Hikikomori\" là một thuật ngữ được dùng để chỉ những người không muốn tiếp xúc với xã hội bên ngoài. Đây là một trong những tình trạng đáng báo động trong xã hội Nhật Bản những năm trở lại đây. Vì thế, chúng tôi đã dành ra một đội ngũ đặc biệt để đến tận nhà và hỗ trợ điều trị các chứng bệnh về tâm lý xã hội cho bệnh nhân."
    ];

    $priceList = [
      "1.000.000VNĐ / 8 tuần điều trị",
      "2.000.000VNĐ / 16 tuần điều trị",
      "2.500.000VNĐ / 10 tuần điều trị tại gia + 6 tuần điều trị tại trung tâm"
    ];

    $imgList = [
      "https://bookingcare.vn/files/blog/2020/12/30/100527-tu-van-tam-ly.jpg",
      "https://cdn.bookingcare.vn/fr/w800/2020/12/21/165610-tu-van-tam-ly-online.jpg",
      "https://cdn.bookingcare.vn/fr/w800/2020/12/23/172913-chuyen-gia-tam-ly.jpg"
    ];

    for ($i = 0; $i < 3; $i++)
      $servicesList[$i] = new servicesDetail($idList[$i], $nameList[$i], $descList[$i], $priceList[$i], $imgList[$i]);
    $data = array('servicesList' => $servicesList);
    $this->render('PricingScreen', $data);
  }

  public function products()
  {
    // A list of servicesDetail given by the database
    $docList = [];

    // == TEST PURPOSE ==
    $nameList = [
      "Bác sĩ Albert Steins",
      "Bác sĩ Fumihiko Yotsuki",
      "Bác sĩ Nguyễn Quốc Kiên",
      "Bác sĩ Hoàng Vân Khánh"

    ];

    $descList = [
      "Chuyên gia điều trị đến từ nước Đức. Thâm niên 20 năm trong ngành điều trị tâm lý.",
      "Chuyên gia tâm lý Nhật Bản với 23 năm có kinh nghiệm trong việc điều trị tâm lý.",
      "Chuyên gia tâm lý đến từ Đại học Y Thành phố Hồ Chí Minh.",
      "Chuyên gia tâm lý với 30 năm kinh nghiệm trong ngành. Từng làm việc tại các nước phát triển."

    ];

    $imgList = [
      "https://img.freepik.com/free-photo/portrait-smiling-handsome-male-doctor-man_171337-5055.jpg?w=2000",
      "https://img.freepik.com/free-photo/portrait-beautiful-japanese-woman-doctor-white_251136-79512.jpg?w=2000",
      "https://vietnamtimes.org.vn/stores/news_dataimages/trangnguyenvnt/112021/07/14/5737_4.jpg?rt=20211107145741",
      "https://img.freepik.com/free-photo/confident-doctor-looking-camera-holding-tablet-pc_1098-18880.jpg?w=2000"

    ];

    for ($i = 0; $i < 4; $i++)
      $docList[$i] = new docDetail($nameList[$i], $descList[$i],  $imgList[$i]);

    $data = array('docList' => $docList);
    $this->render('ProductScreen', $data);
  }

  public function order()
  {
    // A list of productsDetail given by the database
    $servicesList = [];

    // == TEST PURPOSE ==
    $idList = [
      "plan-1",
      "plan-2",
      "plan-3"
    ];

    $nameList = [
      "Dịch vụ tư vấn trực tiếp tại trung tâm",
      "Dịch vụ tư vấn trực tuyến",
      "Dịch vụ tư vấn tại gia"
    ];

    $descList = [
      "60% khách hàng là bệnh nhân của chúng tôi đã quyết định đến trung tâm để tham gia vào các khóa điều trị cộng đồng. Kết quả mang lại là rất rõ rệt và được đánh giá rất cao trong số các khách hàng. Nếu bạn cảm thấy không phiền, hãy đến với trung tâm của chúng tôi để nhận được nhiều ưu đãi hơn.",
      "Trong mùa dịch bệnh đang hoành hành, nhiều khách hàng cảm thấy rất e ngại với việc tiếp xúc gần cũng như phải ra ngoài. Thấu hiểu được điều đó, mô hình chăm sóc và tư vấn sức khỏe tâm lý của khách hàng trực tuyến đã được chúng tôi triển khai và tiến hành từ rất sớm. Các bạn sẽ được cung cấp một hệ thống để liên lạc với các bác sĩ 24/7.",
      "\"Hikikomori\" là một thuật ngữ được dùng để chỉ những người không muốn tiếp xúc với xã hội bên ngoài. Đây là một trong những tình trạng đáng báo động trong xã hội Nhật Bản những năm trở lại đây. Vì thế, chúng tôi đã dành ra một đội ngũ đặc biệt để đến tận nhà và hỗ trợ điều trị các chứng bệnh về tâm lý xã hội cho bệnh nhân."
    ];

    $priceList = [
      "1.000.000VNĐ / 8 tuần điều trị",
      "2.000.000VNĐ / 16 tuần điều trị",
      "2.500.000VNĐ / 10 tuần điều trị tại gia + 6 tuần điều trị tại trung tâm"
    ];

    $imgList = [
      "https://bookingcare.vn/files/blog/2020/12/30/100527-tu-van-tam-ly.jpg",
      "https://cdn.bookingcare.vn/fr/w800/2020/12/21/165610-tu-van-tam-ly-online.jpg",
      "https://cdn.bookingcare.vn/fr/w800/2020/12/23/172913-chuyen-gia-tam-ly.jpg"
    ];

    for ($i = 0; $i < 3; $i++)
      $servicesList[$i] = new servicesDetail($idList[$i], $nameList[$i], $descList[$i], $priceList[$i], $imgList[$i]);

    $data = array('servicesList' => $servicesList);
    $this->render('OrderScreen', $data);
  }

  public function showDetails()
  {
    $this->render('ProductScreen');
  }


  // Ham lay data service
  public function getproducts()
  {
    $this->render('ProductScreen');
  }

  public function getProductByID($id)
  {
    $this->render('ProductScreen');
  }


  // Ham cho gia dich vu
  public function getPrices()
  {
    $this->render('PricingScreen');
  }

  public function getPricesByID($id)
  {
    $this->render('PricingScreen');
  }
}
