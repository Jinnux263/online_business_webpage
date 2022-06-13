<?php
// Variable for account type
$accountType = "admin";
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account/password.css">
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
                    if ($accountType == "admin")
                        echo "
                                <div class='option' onclick=\"navigate('UserController','servicesAdmin')\">Quản lý dịch vụ</div>
                                <div class='option' onclick=\"navigate('UserController','billsAdmin')\">Quản lý đơn đặt</div>
                                <div class='option' onclick=\"navigate('UserController','postAdmin')\">Quản lý bài viết</div>
                            "
                    ?>
                    <div class="option" onclick="navigate('UserController','password')">Thay đổi mật khẩu</div>
                    <div class="option logout" onclick="logout()">Đăng xuất</div>
                </div>
                <form action="" method="post" class="settingsContent">
                    <div class="headingSection">
                        <div class="settingsHeading">Thay đổi mật khẩu</div>
                        <div class="settingsDesc">Chỉnh sửa thông tin mật khẩu của bạn</div>
                    </div>
                    <div class="innerSection">
                        <div class="optionRow">
                            <label for="oldPwd">Mật khẩu cũ</label>
                            <div class="optionContent">
                                <input type="password" id="oldPwd" name="oldPwd">
                            </div>
                        </div>
                        <div class="optionRow">
                            <label for="newPwd">Mật khẩu mới</label>
                            <div class="optionContent">
                                <input type="password" id="newPwd" name="newPwd">
                            </div>
                        </div>
                        <div class="optionRow">
                            <label for="confPwd">Xác nhận mật khẩu</label>
                            <div class="optionContent">
                                <input type="password" id="confPwd" name="confPwd">
                            </div>
                        </div>
                        <div class="optionRow">
                            <div class="label"></div>
                            <div class="optionContent">
                                <input type="submit" class="confirmButton" value="Lưu">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>














    <?php include APP_ROOT . '/src/views/includes/footer.php' ?>