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

    <div id="headerTab">
        <div class="btn" onclick="navigate('HomeController','index');">Trang chủ</div>
        <div class="btn" onclick="navigate('HomeController','about');">Thông tin</div>
        <div class="btn" onclick="navigate('HomeController','products');">Dịch vụ</div>
        <div class="btn" onclick="navigate('HomeController','pricing');">Bảng giá</div>
        <div class="btn" onclick="navigate('HomeController','contact');">Liên hệ</div>
        <div class="btn" onclick="navigate('HomeController','news');">Tin tức</div>
        <div class="btn login" onclick="navigate('AuthenticationController','login');">Đăng nhập</div>
    </div>

    <div id="app-container">
        <div class="page-title"></div>
        <div id="app">
            <div id="content">
                <div id="wrapper">
                    <div class="header">Liên hệ qua Email</div>
                    <div class="desc">Nếu có vấn đề thắc mắc về dịch vụ của chúng tôi cũng như có vấn đề cần giải quyết, hãy liên hệ với chúng tôi</div>
                    <div class="inputContainer">
                        <input type="text" id="name" name="name" placeholder="Họ và tên">
                        <input type="email" id="email" name="email" placeholder="Email">
                        <input type="tel" id="tel" name="tel" placeholder="Số điện thoại">
                        <input type="text" id="title" name="title" placeholder="Tiêu đề">
                    </div>
                    <div class="inputContainer">
                        <textarea id="emailContent" name="emailContent" placeholder="Nội dung"></textarea>
                    </div>
                    <button id="contactSubmitButton">Liên hệ với chúng tôi</button>
                </div>
            </div>
        </div>
    </div>














    <div id="footerTab">
        <div id="address">
            <div class="title">Địa chỉ</div>
            <div id="addressContainer">
                <ul>
                    <li class="address">Số 1, Đường Phan Văn Trị, Phường 12, Quận Gò Vấp, TP.HCM</li>
                    <li class="address">Số 1, Đường Phan Văn Trị, Phường 12, Quận Gò Vấp, TP.HCM</li>
                </ul>
            </div>
        </div>
        <div id="socialMedia">
            <div class="title">Social Media</div>
            <div id="socialMediaContainer">
                <img src="https://img.icons8.com/material-outlined/48/000000/facebook-new.png" />
                <img src="https://img.icons8.com/material-outlined/48/000000/youtube-play--v1.png" />
                <img src="https://img.icons8.com/material-outlined/48/000000/instagram-new--v1.png" />
                <img src="https://img.icons8.com/material-outlined/48/000000/twitter.png" />
            </div>
        </div>
        <div id="contact">
            <div class="title">Liên hệ</div>
            <div class="contactsContainer">
                <div class="contactContainer">
                    <div class="contactTitle">Email</div>
                    <div class="contactInfo">tryz@tryz.mail</div>
                </div>
                <div class="contactContainer">
                    <div class="contactTitle">Email</div>
                    <div class="contactInfo">tryz@tryz.mail</div>
                </div>
                <div class="contactContainer">
                    <div class="contactTitle">Hotline</div>
                    <div class="contactInfo">tryz@tryz.mail</div>
                </div>
            </div>
        </div>
    </div>
    <script src="/mvc_webapp/public/js/deps/flickity.pkgd.min.js"></script>
</body>

</html>