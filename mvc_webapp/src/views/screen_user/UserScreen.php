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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>  

    <div id="app-container">
        <div class="page-title">Tài khoản</div>
        <div id="app">
            <div id="content">
                <script src="deps/account.js"></script>
                <div class="navigation">
                    <div class="option" onclick="settingsLoad('general')">Thông tin chung</div>
                    <div class="option" onclick="settingsLoad('bills')">Dịch vụ đã đặt</div>
                    <?php
                        if ($accountType == "admin")
                            echo "
                                <div class='option' onclick=\"settingsLoad('services')\">Quản lý dịch vụ</div>
                                <div class='option' onclick=\"settingsLoad('billsManagement')\">Quản lý đơn đặt</div>
                                <div class='option' onclick=\"settingsLoad('newsManagement')\">Quản lý bài viết</div>
                            "
                    ?>
                    <div class="option">Thay đổi mật khẩu</div>
                </div>
                <div class="settingsContent"></div>
            </div>
        </div>
    </div>














    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>