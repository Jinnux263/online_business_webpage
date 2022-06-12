<?php
    // Prototype for a about detail, which includes the header and description.
    class aboutDetail {
        public $aboutHeader;
        public $aboutDesc;
        public $aboutImg;
    }

    // A list of aboutDetail given by the database
    $aboutList = [];

    // == TEST PURPOSE ==
    $headerList = [
        "Chúng tôi là người bạn đồng hành của các bạn",
        "Bạn không ở một mình trong chuyến đi này",
        "Hãy tin tưởng vào các bác sĩ của chúng tôi"
    ];

    $descList = [
        "Chúng tôi làm việc với phương châm: \"Không bỏ lại bệnh nhân nào ở phía sau\". Bằng phương pháp điều trị tích cực và đầy tính hiệu quả của chúng tôi, chúng tôi sẽ không để bệnh nhân nào phải gặp khó khăn trong cuộc sống.",
        "Ngoài các bác sĩ là người đồng hành, bệnh nhân còn được tham gia vào các chương trình điều trị cộng đồng nhằm giúp bệnh nhân lấy lại tự tin của bản thân, mở lòng hơn với xã hội cũng như mang đến sự gắn kết cho mọi người.",
        "Các bác sĩ thuộc trung tâm tư vấn của chung tôi đều là những chuyên gia tư vấn tâm lý xuất sắc, có thâm niên trong ngành. Khi đến với chúng tôi, bạn không cần phải lo lắng về chất lượng tư vấn của các bác sĩ ở đây. Đối với chúng tôi, các bệnh nhân như là những người bạn."
    ];
    
    $imgList = [
        "https://www.studentdoctor.net/wp-content/uploads/2019/11/AdobeStock_265652380.jpg",
        "https://www.cffhae.org/wp-content/uploads/2014/07/Happy-Patient-1024x683.jpg",
        "https://i0.wp.com/post.psychcentral.com/wp-content/uploads/sites/4/2021/09/close-up-mental-health-professional-therapist-clipboard-taking-notes-counseling-1296x728-header-1024x575.jpg?w=1155&h=1528"
    ];

    for ($i = 0; $i < 3; $i++) {
        $aboutList[$i] = new aboutDetail();
        $aboutList[$i]->aboutHeader = $headerList[$i];
        $aboutList[$i]->aboutDesc = $descList[$i];
        $aboutList[$i]->aboutImg = $imgList[$i];
    }
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
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/about.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <?php include APP_ROOT.'/src/views/includes/navbar.php' ?>

    <div id="app-container">
        <div class="page-title">Thông tin</div>
        <div id="app">
            <div id="content">
            <?php
                    foreach ($aboutList as $idx=>$e) {
                        $pos = "right";
                        $deg = "90";
                        if ($idx % 2 != 0){
                            $pos = "left";
                            $deg = "270";
                        }

                        echo "
                        <div class='infoTab ".$pos."' style='background: linear-gradient(".$deg."deg, rgb(255, 255, 255, 0) 30%, rgba(255, 255, 255, 1) 50%), url(".$e->aboutImg."); background-size: cover'>
                            <div class='tabTitle'>".$e->aboutHeader."</div>
                            <div class='tabContent'>".$e->aboutDesc."</div>
                        </div>";
                    }
                ?>
            </div>
        </div>
    </div>













    <?php include APP_ROOT.'/src/views/includes/footer.php' ?>