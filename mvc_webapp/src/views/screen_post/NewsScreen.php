<?php
    // Prototype for a post detail, which includes the title, content and image.
    class postDetail {
        public $postTitle;
        public $postDate;
        public $postContent;
        public $postImg;
    }

    // A list of postDetail given by the database
    $postList = [];

    // == TEST PURPOSE ==
    // for ($i = 0; $i < 5; $i++) {
    //     $postList[$i] = new postDetail();
    //     $postList[$i]->postTitle = "Thử nghiệm ".$i;
    //     $postList[$i]->postDate = "Date: ".$i;
    //     $postList[$i]->postContent = "Đây là thử nghiệm ".$i;
    //     $postList[$i]->postImg = "https://cdnb.artstation.com/p/assets/images/images/019/036/961/large/minh-hai-do-1551940067489.jpg?1561728310";
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/news.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT . '/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Tin tức</div>
        <div id="app">
            <div id="content">
                <div class="newsContainer">
                    <?php
                        foreach ($postList as $idx=>$e) {
                            echo "
                            <div class='news'>
                                <div class='newsPreview' style='background: url(".$e->postImg.") center center/cover'></div>
                                <div class='newsContent'>
                                    <div class='newsHeading'>".$e->postTitle."</div>
                                    <div class='newsDate'>".$e->postDate."</div>
                                    <div class='newsDesc'>".$e->postContent."</div>
                                </div>
                            </div>";
                        }
                    ?>
                </div>
                <!-- <div class="newsNavigator">
                    <div class="newsFilter">Tháng 6/2022</div>
                    <div class="newsFilter">Tháng 5/2022</div>
                    <div class="newsFilter">Tháng 4/2022</div>
                    <div class="newsFilter">Tháng 3/2022</div>
                    <div class="newsFilter">Tháng 2/2022</div>
                    <div class="newsFilter">Tháng 1/2022</div>
                    <div class="newsFilter">Tháng 12/2021</div>
                    <div class="newsFilter">Tháng 11/2021</div>
                </div> -->
                <!-- <div class="newsPage">
                    <div class="newsPrev">&#60;</div>
                    <div class="newsPageIterator currentPage">1</div>
                    <div class="newsPageIterator">2</div>
                    <div class="newsPageIterator">3</div>
                    <div class="newsForw">&#62;</div>
                </div> -->
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