<?php
    // Prototype for a post detail, which includes the title, content and image.
    class postDetail {
        public $postTitle;
        public $postDate;
        public $postContent;
        public $postImg;

        public function __construct($title, $date, $content, $img)
        {
            $this->postTitle = $title;
            $this->postDate = $date;
            $this->postContent = $content;
            $this->postImg = $img;
        }
    }

    // A list of postDetail given by the database
    $postList = [];

    // == TEST PURPOSE ==
    $titleList = [
        "Điều trị tâm lý cho trẻ vị thành niên - Bài toàn mới trong ngành tâm lý?",
        "Hikikomori là gì và tác động của nó đến giới trẻ Nhật Bản",
        "Trầm cảm và những biểu hiện ban đầu",
        "Trầm cảm và những biểu hiện ban đầu"
    ];

    $dateList = [
        "12/6/2022",
        "3/2/2022",
        "1/1/2021",
        "1/1/2021",
    ];

    $contentList = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mi nisl, dictum id orci at, eleifend dapibus diam. Sed dictum, orci ac lobortis euismod, nunc lectus egestas massa, nec rhoncus tellus nulla ac est. Nullam egestas suscipit lectus et faucibus. Sed pharetra turpis et mi pellentesque eleifend. Sed faucibus nunc mi, tristique blandit nisi venenatis in.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mi nisl, dictum id orci at, eleifend dapibus diam. Sed dictum, orci ac lobortis euismod, nunc lectus egestas massa, nec rhoncus tellus nulla ac est. Nullam egestas suscipit lectus et faucibus. Sed pharetra turpis et mi pellentesque eleifend. Sed faucibus nunc mi, tristique blandit nisi venenatis in.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mi nisl, dictum id orci at, eleifend dapibus diam. Sed dictum, orci ac lobortis euismod, nunc lectus egestas massa, nec rhoncus tellus nulla ac est. Nullam egestas suscipit lectus et faucibus. Sed pharetra turpis et mi pellentesque eleifend. Sed faucibus nunc mi, tristique blandit nisi venenatis in.",
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mi nisl, dictum id orci at, eleifend dapibus diam. Sed dictum, orci ac lobortis euismod, nunc lectus egestas massa, nec rhoncus tellus nulla ac est. Nullam egestas suscipit lectus et faucibus. Sed pharetra turpis et mi pellentesque eleifend. Sed faucibus nunc mi, tristique blandit nisi venenatis in."
    ];

    $imgList = [
        "https://ounews.co/wp-content/uploads/2018/03/shutterstock_174741554-e1519911636917.jpg",
        "https://kenh14cdn.com/thumb_w/650/2016/hikiko-1471883423991.jpg",
        "https://vinmec-prod.s3.amazonaws.com/images/20210320_072716_425735_tram-cam.max-1800x1800.jpg",
        "https://vinmec-prod.s3.amazonaws.com/images/20210320_072716_425735_tram-cam.max-1800x1800.jpg"
    ];

    for ($i = 0; $i < 4; $i++)
        $postList[$i] = new postDetail($titleList[$i], $dateList[$i], $contentList[$i], $imgList[$i]);
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