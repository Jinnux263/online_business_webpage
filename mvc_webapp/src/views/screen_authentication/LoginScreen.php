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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Đăng nhập</div>
        <div id="app">
            <div id="content">
                <div id="wrapper">
                    <div class="header">Đăng nhập</div>
                    <div class="desc">Nếu có chưa có tài khoản, hãy <span class="quickNav" onclick="navigate('AuthenticationController','register');">đăng ký</span> tại đây</div>
                    <form action="/mvc_webapp/public/index.php?controller=AuthenticationController&action=login" method="post" class="inputContainer">
                        <input type="text" id="user" name="user" placeholder="Tên đăng nhập">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                        <input type="submit" value="Đăng nhập" class="loginButton">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>