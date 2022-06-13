<?php
    // A prototype for a bill detail, which includes the service name, bill Id and date
    class customerDetail {
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

    class billAdminDetail {
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

    // List of bills taken from database
    $billAdminList = [];

    // == TEST PURPOSE ==
    for ($i = 0; $i < 5; $i++)
    $billAdminList[$i] = new billAdminDetail("Dịch vụ tư vấn tâm lý trực tiếp", "#009849", "12/2/2022", "Lê Van Dovious Panda", "dvs_pd@ppy.sh", "0727 727 727");
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account/billsManagement.css">
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
                    if (!$_SESSION['isAdmin'])
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
                        <div class="settingsHeading">Quản lý đơn đặt dịch vụ</div>
                        <div class="settingsDesc">Xem và xóa đơn đặt dịch vụ</div>
                    </div>
                    <div class="innerSection">
                        <?php
                            foreach ($billAdminList as $e) {
                                echo "
                                    <div class='billRow'>
                                        <div class='firstRow'>
                                            <div class='billName'>" . $e->servicesName . "</div>
                                            <div class='billId'>" . $e->billId . "</div>
                                            <div class='billDate'>" . $e->billDate . "</div>
                                        </div>
                                        <div class='secondRow'>
                                            <div class='billCustomer'>" . $e->customerInfo->customerName . "</div>
                                            <div class='customerEmail'>" . $e->customerInfo->customerEmail . "</div>
                                            <div class='custerTel'>" . $e->customerInfo->customerTel . "</div>
                                        </div>
                                        <div class='removeButton' onclick='removeBox(this)'>Xóa đơn</div>
                                    </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>














    <?php include APP_ROOT . '/src/views/includes/footer.php' ?>