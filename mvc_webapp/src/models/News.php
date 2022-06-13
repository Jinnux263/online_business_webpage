<?php
require_once APP_ROOT . '/src/models/ModelHelper.php';
class NewsModel {

    // public $newsId;
    // public $newsTitle;
    // public $newsImg;
    // public $newsContent;

    public $newsList;

    function __construct() {
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
    $this->newsList = $postList;
    }

    function getALl() {
      return $this->newsList;
    }

    function getById($id) {
        
    }

    function deleteById($id) {
        
    }

    function add($obj) {
        
    }

    function modify($id, $obj) {

    }


}
