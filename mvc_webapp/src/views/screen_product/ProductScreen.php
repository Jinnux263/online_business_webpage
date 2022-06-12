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
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                    <div class="gallery-cell">
                        <div class="card-title">TRONG TRƯỜNG HỢP</div>
                        <div class="card-subText">
                            Trong trường hợp page này bị điều tra bởi các cơ quan trực thuộc
                            Bộ Công An (hoặc các tổ chức chính trị tương tự phục vụ cho nhà
                            nước CHXHCNVN), tôi khẳng định page hoàn toàn không ủng hộ và
                            giúp sức cho các hành vi chống phá Đảng và nhà nước CHXHCNVN.
                            Tôi cũng không quên khẳng định quyết tâm chiến thắng đại dịch
                            Covid-19, nhấn mạnh chủ quyền không thể tranh cãi với quần đảo
                            Hoàng Sa và Trường Sa, cũng như tính chính nghĩa của cuộc chiến
                            giải phóng người dân Campuchia khỏi thảm họa diệt chủng Khmer
                            Đỏ.
                        </div>
                    </div>
                    <div class="gallery-cell">
                        <div class="card-title">WHEN YOU SEE IT</div>
                        <div class="card-subText">
                            Abbreviation for "When You See It". Used in the osu! community whenever the number 727 appears, started from a 727 pp play by Cookiezi.
                            Aireu: Goddamnit... so close... SEVEN TWENTY SEVEN! SEVEN TWENTY SEVEN! WHEN YOU SEE IT! WHEN YOU F*CKING SEE IT! *points at the screen* SEVEN TWENTY SEVEN! When you f*cking see it.
                            Twitch chat: *wall of text of "WYSI"*
                        </div>
                    </div>
                    <div class="gallery-cell"></div>
                    <div class="gallery-cell"></div>
                    <div class="gallery-cell">
                        <div class="card-title">VIETNAM COMMUNITY LEAGUE</div>
                        <div class="card-subText">
                            Vietnam Community League (VCL) là hệ thống giải osu! chuyên nghiệp đầu tiên tại Việt Nam. Với lịch trình hoạt động xuyên suốt trong năm nhờ các giải đa dạng về thể thức và lực lượng hỗ trợ chuyên nghiệp, Vietnam Community League hướng tới mục tiêu đem lại trải nghiệm tốt nhất dành cho các người chơi cũng như người theo dõi.
                        </div>
                    </div>
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