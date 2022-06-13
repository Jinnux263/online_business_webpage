<?php
    // Variable for account type
    $accountType = "admin";

    // A prototype for news preview, which includes the title and the preview image
    class newsPreview {
        public $newsTitle;
        public $newsImg;

        public function __construct($title, $img)
        {
            $this->newsTitle = $title;
            $this->newsImg = $img;
        }
    }

    // A list of news taken from database
    $newsList = [];

    // == TEST PURPOSE ==
    $titleList = [
        "Điều trị tâm lý cho trẻ vị thành niên - Bài toàn mới trong ngành tâm lý?",
        "Hikikomori là gì và tác động của nó đến giới trẻ Nhật Bản",
        "Trầm cảm và những biểu hiện ban đầu",
        "Trầm cảm và những biểu hiện ban đầu"
    ];

    $imgList = [
        "https://ounews.co/wp-content/uploads/2018/03/shutterstock_174741554-e1519911636917.jpg",
        "https://kenh14cdn.com/thumb_w/650/2016/hikiko-1471883423991.jpg",
        "https://vinmec-prod.s3.amazonaws.com/images/20210320_072716_425735_tram-cam.max-1800x1800.jpg",
        "https://vinmec-prod.s3.amazonaws.com/images/20210320_072716_425735_tram-cam.max-1800x1800.jpg"
    ];

    for ($i = 0; $i < 4; $i++)
        $newsList[$i] = new newsPreview($titleList[$i], $imgList[$i]);
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/account/newsManagement.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT . '/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Tài khoản</div>
        <div id="app">
            <div id="content">
                <div class="navigation">
                    <div class="option" onclick="navigate('UserController','account')">Thông tin chung</div>
                    <div class="option" onclick="navigate('UserController','bills')">Dịch vụ đã đặt</div>
                    <?php
                    if ($accountType == "admin")
                        echo "
                                <div class='option' onclick=\"navigate('UserController','servicesAdmin')\">Quản lý dịch vụ</div>
                                <div class='option' onclick=\"navigate('UserController','billsAdmin')\">Quản lý đơn đặt</div>
                                <div class='option' onclick=\"navigate('UserController','postAdmin')\">Quản lý bài viết</div>
                            "
                    ?>
                    <div class="option" onclick="navigate('UserController','password')">Thay đổi mật khẩu</div>
                    <div class="option logout" onclick="logout()">Đăng xuất</div>
                </div>
                <div class="settingsContent">
                    <div class="headingSection">
                        <div class="settingsHeading">Quản lý bài viết</div>
                        <div class="settingsDesc">Xem và chỉnh sửa bài viết trên Tin tức</div>
                    </div>
                    <div class="innerSection">
                        <?php
                            foreach ($newsList as $e) {
                                echo "
                                    <div class='newsContainer'>
                                        <div class='newsPreview' style='background: url(" . $e->newsImg . ") center center/cover'></div>
                                        <div class='newsTitle'>" . $e->newsTitle . "</div>
                                        <div class='remover' onclick='removeBox(this)'>-</div>
                                    </div>";
                            }
                        ?>
                        <div class="addNews" onclick="load('post')">+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>














    <?php include APP_ROOT . '/src/views/includes/footer.php' ?>