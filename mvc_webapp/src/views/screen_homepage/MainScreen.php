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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT . '/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Trang chủ</div>
        <div id="app">
            <div id="content">
                <div id="title">
                    NẾU BẠN GẶP VẤN ĐỀ TÂM LÝ<br>
                    HÃY LIÊN HỆ VỚI CHÚNG TÔI
                </div>
                <div id="subText">
                    Trung tâm Tư vấn Tâm lý Mental First sẵn sàng hỗ trợ bạn trong cuộc sống. <br>
                    Bắt đầu chỉ với việc nhập email của bạn!
                </div>
                <input type="text" id="emailInput" placeholder="Email">
                <button id="submitButton">Gửi</button>
            </div>
        </div>
    </div>











    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>