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
                                    <label for="servicesImg-'.$idx.'">Hình ảnh</label>
                                    <input type="text" id="servicesImg-'.$idx.'" name="servicesImg-'.$idx.'" class="servicesInput" value="' . $e->servicesImg . '">
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