<?php
require_once APP_ROOT . '/src/models/ModelHelper.php';

class DoctorModel {
    // Thông tin của một đơn đặt dịch vụ

    // public $doctorId;
    // public $docName;
    // public $docDesc;
    // public $docImg;

    public $doctorsList;

    function __construct() {

        $DB = new Database();
        $DBconn = $DB->getInstance();
        $result = $DBconn->query("SELECT * FROM orders;");

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

        $this->doctorsList = $docList;
    }

    function getALl() {
      return $this->doctorsList;
    }

    function getById($id) {
        
    }

    function deleteById($id) {
        
    }

    function add($obj) {
        
    }

}




?>