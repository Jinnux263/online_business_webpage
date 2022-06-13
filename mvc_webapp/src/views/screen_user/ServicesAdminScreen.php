<?php
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account/services.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT . '/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Tài khoản</div>
        <div id="app">
            <div id="content">
                <div class="navigation">
                    <div class="option" onclick="navigate('UserController','account')">Thông tin chung</div>
                    <div class="option" onclick="navigate('UserController','bills')">Dịch vụ đã đặt</div>
                    <?php
                    if ($_SESSION['isAdmin'])
                        echo "
                                <div class='option' onclick=\"navigate('UserController','servicesAdmin')\">Quản lý dịch vụ</div>
                                <div class='option' onclick=\"navigate('UserController','billsAdmin')\">Quản lý đơn đặt</div>
                                <div class='option' onclick=\"navigate('UserController','postAdmin')\">Quản lý bài viết</div>
                            "
                    ?>
                    <div class="option" onclick="navigate('UserController','password')">Thay đổi mật khẩu</div>
                    <div class="option logout" onclick="logout()">Đăng xuất</div>
                </div>
                <div class="settingsContent">
                    <div class="headingSection">
                        <div class="settingsHeading">Quản lý dịch vụ</div>
                        <div class="settingsDesc">Chỉnh sửa các thông tin liên quan đến dịch vụ</div>
                    </div>
                    <div class="innerSection">
                        <?php
                        foreach ($servicesList as $idx=>$e) {
                            echo '
                                <form action="" method="post" class="servicesBox">
                                    <label for="servicesId-'.$idx.'">Id dịch vụ</label>
                                    <input type="text" id="servicesId-'.$idx.'" name="servicesId-'.$idx.'" class="servicesInput" value="' . $e->servicesId . '">
                                    <label for="servicesName-'.$idx.'">Tên dịch vụ</label>
                                    <input type="text" id="servicesName-'.$idx.'" name="servicesName-'.$idx.'" class="servicesInput" value="' . $e->servicesName . '">
                                    <label for="servicesDesc-'.$idx.'">Mô tả dịch vụ</label>
                                    <input type="text" id="servicesDesc-'.$idx.'" name="servicesDesc-'.$idx.'" class="servicesInput" value="' . $e->servicesDesc . '">
                                    <label for="servicesPrice-'.$idx.'">Giá</label>
                                    <input type="text" id="servicesPrice-'.$idx.'" name="servicesPrice-'.$idx.'" class="servicesInput" value="' . $e->servicesPrice . '">
                                    <input type="submit" id="saveButton-'.$idx.'" class="saveButton" value="Lưu">
                                    <div class="remover" onclick="removeBox(this)">-</div>
                                </form>';
                        }
                        ?>
                        <div class="addBox" onclick="addServicesBox()">+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>














    <?php include APP_ROOT . '/src/views/includes/footer.php' ?>