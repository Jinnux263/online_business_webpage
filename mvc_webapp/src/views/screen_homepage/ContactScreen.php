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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Liên hệ</div>
        <div id="app">
            <div id="content">
                <div id="wrapper">
                    <div class="header">Liên hệ qua Email</div>
                    <div class="desc">Nếu có vấn đề thắc mắc về dịch vụ của chúng tôi cũng như có vấn đề cần giải quyết, hãy liên hệ với chúng tôi</div>
                    <form action="" method="post">
                        <div class="inputContainer">
                            <input type="text" id="name" name="name" placeholder="Họ và tên">
                            <input type="email" id="email" name="email" placeholder="Email">
                            <input type="tel" id="tel" name="tel" placeholder="Số điện thoại">
                            <input type="text" id="title" name="title" placeholder="Tiêu đề">
                        </div>
                        <div class="inputContainer">
                            <textarea id="emailContent" name="emailContent" placeholder="Nội dung"></textarea>
                        </div>
                        <input type="submit" value="Liên hệ với chúng tôi" class="contactSubmitButton">
                    </form>
                </div>
            </div>
        </div>
    </div>














    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>