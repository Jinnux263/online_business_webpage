<?php
    // User info if user has logged in
    if ($_SESSION['authenticated']) {
        // $realName = "Nguyen Van A";
        // $email = "test@gmail.com";
        // $tel = "0123456789";
        $realName = "";
        $email = "";
        $tel = "";
    } else {
        $realName = "";
        $email = "";
        $tel = "";
    }
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