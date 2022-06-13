<?php
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
?>
<div class="headingSection">
    <div class="settingsHeading">Quản lý bài viết</div>
    <div class="settingsDesc">Xem và chỉnh sửa bài viết trên Tin tức</div>
</div>
<div class="innerSection">
    <?php
        foreach ($newsList as $e) {
            echo "
                <div class='newsContainer>
                    <div class='newsPreview' style='background: url(".$e->newsImg.")'></div>
                    <div class='newsTitle'>".$e->newsTitle."</div>
                    <div class='remover' onclick='removeBox(this)'>-</div>
                </div>";
        }
    ?>
    <div class="addNews" onclick="load('post')">+</div>
</div>