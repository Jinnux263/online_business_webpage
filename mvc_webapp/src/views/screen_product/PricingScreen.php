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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/pricing.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Bảng giá dịch vụ</div>
        <div id="app">
            <div id="content">
                <?php
                    foreach ($servicesList as $idx=>$e) {
                        $pos = "left";
                        if ($idx % 2 != 0)
                            $pos = "right";

                        echo "
                        <div class='plan-container plan-".$pos."' onclick=\"navigate('ProductDetailController','order')\">
                            <div class='plan-icon' style='background: url(".$e->servicesImg.") center center/cover'></div>
                            <div class='plan-card'>
                                <div class='plan-title'>".$e->servicesName."</div>
                                <div class='plan-desc'>".$e->servicesDesc."</div>
                                <div class='plan-price'>".$e->servicesPrice."</div>
                            </div>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </div>














    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>