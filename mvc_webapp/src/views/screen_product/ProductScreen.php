<?php
    // Prototype for a services detail, which includes the header, description and image.
    class docDetail {
        public $docName;
        public $docDesc;
        public $docImg;

        public function __construct($name, $desc, $img)
        {
            $this->docName = $name;
            $this->docDesc = $desc;
            $this->docImg = $img;
        }
    }

    // A list of servicesDetail given by the database
    $docList = [];

    // == TEST PURPOSE ==
    $nameList = [
        "Bác sĩ Albert Steins",
        "Bác sĩ Fumihiko Yotsuki",
        "Bác sĩ Nguyễn Quốc Kiên",
        "Bác sĩ Hoàng Vân Khánh"

    ];

    $descList = [
        "Chuyên gia điều trị đến từ nước Đức. Thâm niên 20 năm trong ngành điều trị tâm lý.",
        "Chuyên gia tâm lý Nhật Bản với 23 năm có kinh nghiệm trong việc điều trị tâm lý.",
        "Chuyên gia tâm lý đến từ Đại học Y Thành phố Hồ Chí Minh.",
        "Chuyên gia tâm lý với 30 năm kinh nghiệm trong ngành. Từng làm việc tại các nước phát triển."

    ];
    
    $imgList = [
        "https://img.freepik.com/free-photo/portrait-smiling-handsome-male-doctor-man_171337-5055.jpg?w=2000",
        "https://img.freepik.com/free-photo/portrait-beautiful-japanese-woman-doctor-white_251136-79512.jpg?w=2000",
        "https://vietnamtimes.org.vn/stores/news_dataimages/trangnguyenvnt/112021/07/14/5737_4.jpg?rt=20211107145741",
        "https://img.freepik.com/free-photo/confident-doctor-looking-camera-holding-tablet-pc_1098-18880.jpg?w=2000"

    ];

    for ($i = 0; $i < 4; $i++)
        $docList[$i] = new docDetail($nameList[$i], $descList[$i],  $imgList[$i]);
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
        <div class="page-title">Giới thiệu các bác sĩ nổi bật</div>
        <div id="app">
            <div id="content">
                <div class="main-gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                    <?php
                        foreach ($docList as $idx=>$e) {
                            echo "
                            <div class='gallery-cell' style='background: linear-gradient(0deg, rgba(0 0 0 / 1) 0%, rgba(0 0 0 / 0) 100%), url(".$e->docImg.")'>
                                <div class='card-title'>".$e->docName."</div>
                                <div class='card-subText'>".$e->docDesc."</div>
                            </div>"; 
                        }
                    ?>
                </div>
            </div>

        </div>
    </div>














    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>