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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account/newsManagement.css">
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
                    if ($isAdmin)
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
                        <div class="settingsHeading">Quản lý bài viết</div>
                        <div class="settingsDesc">Xem và chỉnh sửa bài viết trên Tin tức</div>
                    </div>
                    <div class="innerSection">
                        <?php
                            foreach ($newsList as $e) {
                                echo "
                                    <div class='newsContainer'>
                                        <div class='newsPreview' style='background: url(" . $e->newsImg . ") center center/cover'></div>
                                        <div class='newsTitle'>" . $e->newsTitle . "</div>
                                        <div class='remover' onclick='removeBox(this)'>-</div>
                                    </div>";
                            }
                        ?>
                        <div class="addNews" onclick="navigate('PostsController', 'post')">+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include APP_ROOT . '/src/views/includes/footer.php' ?>