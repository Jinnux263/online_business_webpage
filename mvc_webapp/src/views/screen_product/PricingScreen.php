<?php
    // Prototype for a product detail, which includes doctor's name, description, price and image.
    class productsDetail {
        public $productsDoc;
        public $productsDesc;
        public $productsPrice;
        public $productsImg;
    }

    // A list of productsDetail given by the database
    $productsList = [];

    // == TEST PURPOSE ==
    // for ($i = 0; $i < 5; $i++) {
    //     $productsList[$i] = new productsDetail();
    //     $productsList[$i]->productsDoc = "Thử nghiệm ".$i;
    //     $productsList[$i]->productsDesc = "Đây là thử nghiệm ".$i;
    //     $productsList[$i]->productsPrice = "727.000VNĐ";
    //     $productsList[$i]->productsImg = "https://www.stockvault.net/data/2015/09/01/177580/preview16.jpg";
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/pricing.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title"></div>
        <div id="app">
            <div id="content">
                <?php
                    foreach ($productsList as $idx=>$e) {
                        $pos = "left";
                        if ($idx % 2 != 0)
                            $pos = "right";

                        echo "
                        <div class='plan-container plan-".$pos."'>
                            <div class='plan-card'>
                                <div class='plan-title'>".$e->productsDoc."</div>
                                <div class='plan-desc'>".$e->productsDesc."</div>
                                <div class='plan-price'>".$e->productsPrice."</div>
                            </div>
                            <div class='plan-icon'>
                                <img src='".$e->productsImg."' />
                            </div>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </div>














    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>