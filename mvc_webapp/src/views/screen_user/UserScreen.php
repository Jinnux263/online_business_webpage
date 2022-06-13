<?php
    // Prototype for user data
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

    // User data taken from database
    // $userData = null;

    // == TEST PURPOSE ==
    $userData = new userDetail("Try-Z", "Lô Hoàng Khôi Nguyên", "tryz@vcl.works", "0727 727 727");
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account/general.css">
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
                        <div class="settingsHeading">Thông tin tài khoản</div>
                        <div class="settingsDesc">Chỉnh sửa thông tin tài khoản của bạn</div>
                    </div>
                    <form action="" method="post" class="innerSection">
                        <div class="optionRow">
                            <div class="label">Tên đăng nhập</div>
                            <div class="optionContent"><?php echo $userData->userName; ?></div>
                        </div>
                        <div class="optionRow">
                            <div class="label">Tên khách hàng</div>
                            <div class="optionContent">
                                <input type="text" id="realName" name="realName" value="<?php echo $userData->realName ?>" aria-label="realName">
                            </div>
                        </div>
                        <div class="optionRow">
                            <div class="label">Email</div>
                            <div class="optionContent">
                                <input type="email" id="email" name="email" value="<?php echo $userData->email ?>" aria-label="email">
                            </div>
                        </div>
                        <div class="optionRow">
                            <div class="label">Số điện thoại</div>
                            <div class="optionContent">
                                <input type="tel" id="tel" name="tel" value="<?php echo $userData->tel ?>" aria-label="tel">
                            </div>
                        </div>
                        <div class="optionRow">
                            <div class="label"></div>
                            <div class="optionContent">
                                <input type="submit" class="confirmButton" value="Lưu">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>














    <?php include APP_ROOT . '/src/views/includes/footer.php' ?>