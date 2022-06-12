<?php
    // Prototype for a services detail, which includes the header, description and image.
    class servicesDetail {
        public $servicesHeader;
        public $servicesDesc;
        public $servicesImg;
    }

    // A list of servicesDetail given by the database
    $servicesList = [];

    // == TEST PURPOSE ==
    // for ($i = 0; $i < 5; $i++) {
    //     $servicesList[$i] = new servicesDetail();
    //     $servicesList[$i]->servicesHeader = "Vietnam Community League";
    //     $servicesList[$i]->servicesDesc = "Vietnam Community League (VCL) là hệ thống giải osu! chuyên nghiệp đầu tiên tại Việt Nam. Với lịch trình hoạt động xuyên suốt trong năm nhờ các giải đa dạng về thể thức và lực lượng hỗ trợ chuyên nghiệp, Vietnam Community League hướng tới mục tiêu đem lại trải nghiệm tốt nhất dành cho các người chơi cũng như người theo dõi.";
    //     $servicesList[$i]->servicesImg = "./static/bg.jpg";
    // }
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/products.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Giới thiệu dịch vụ</div>
        <div id="app">
            <div id="content">
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                    <?php
                        foreach ($servicesList as $idx=>$e) {
                            echo "
                            <div class='gallery-cell' style='background: linear-gradient(0deg, rgba(0 0 0 / 1) 0%, rgba(0 0 0 / 0) 100%), url(".$e->servicesImg.")'>
                                <div class='card-title'>".$e->servicesHeader."</div>
                                <div class='card-subText'>".$e->servicesDesc."</div>
                            </div>"; 
                        }
                    ?>
                </div>
            </div>

        </div>
    </div>














    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>