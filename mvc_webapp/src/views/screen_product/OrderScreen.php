<?php
    // User info if user has logged in
    if ($_SESSION['authenticated']) {
        $realName = "Nguyen Van A";
        $email = "test@gmail.com";
        $tel = "0123456789";
    } else {
        $realName = "";
        $email = "";
        $tel = "";
    }
    

    // Prototype for a product detail, which includes doctor's name, description, price and image.
    class servicesDetail {
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>play idolm@ster</title>

    <link rel="stylesheet" href="/mvc_webapp/public/js/minified/themes/default.min.css" />
    <script src="/mvc_webapp/public/js/minified/sceditor.min.js"></script>
    <script src="/mvc_webapp/public/js/minified/formats/bbcode.js"></script>
    <script src="/mvc_webapp/public/js/minified/formats/xhtml.js"></script>
    <link rel="stylesheet" href="/mvc_webapp/public/js/deps/flickity.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/header.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/order.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Đăng ký dịch vụ</div>
        <div id="app">
        <div id="content">
            <div id="wrapper">
                <div class="header">Đăng ký sử dụng dịch vụ</div>
                <div class="desc">Bước đầu tiên để kết nối với trung tâm tư vấn chúng tôi</div>
                <form action="" method="post" class="inputContainer">
                    <label for="name">Họ và tên</label>
                    <input type="text" id="name" name="name" value="<?php if ($realName) echo $realName; ?>">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php if ($email) echo $email; ?>">
                    <label for="tel">Số điện thoại</label>
                    <input type="tel" id="tel" name="tel" value="<?php if ($tel) echo $tel; ?>">
                    <label for="name">Chọn dịch vụ</label>
                    <select name="services" id="services" aria-label="services">
                        <?php 
                            foreach ($servicesList as $e) {
                                echo "
                                    <option value='".$e->servicesId."'>".$e->servicesName." - (".$e->servicesPrice.")</option>";
                            }
                        ?>
                    </select>
                    <input type="submit" class="contactSubmitButton" value="Đăng ký">
                </form>
            </div>
        </div>

        </div>
    </div>














    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>