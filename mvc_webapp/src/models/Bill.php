<?php
require_once APP_ROOT . '/src/models/ModelHelper.php';
class BillModel {
    // Thông tin của một đơn đặt dịch vụ

    // public $servicesName;
    // public $billId;
    // public $billDate;
    // public $customerInfo;

    public $billsList;

    public function __construct()
    {
        $DB = new Database();
        $DBconn = $DB->getInstance();
        $result = $DBconn->query("SELECT * FROM orders;");

        // print_r($result);
        $lst =  $result->fetch_all();

        // print_r($lst);
        $billList = [];

        foreach($lst as $item) {
            // $billList[] =  new billAdminDetail($item[''], $item['NUM'], $item['O_DATE'], $item[''], $item[''], $item['']);
            $billList[] = new billAdminDetail("Dịch vụ tư vấn tâm lý trực tiếp", "#009849", "12/2/2022", "Lê Van Dovious Panda", "dvs_pd@ppy.sh", "0727 727 727");
        }

        // for ($i = 0; $i < 5; $i++) {
        //     $billList[$i] = new billAdminDetail("Dịch vụ tư vấn tâm lý trực tiếp", "#009849", "12/2/2022", "Lê Van Dovious Panda", "dvs_pd@ppy.sh", "0727 727 727");
        // }
        
        $this->billsList = $billList;
    }

    function getALl() {
        return $this->billsList;
    }

    function getById($id) {
        
    }

    function deleteById($id) {
        
    }

    function add($obj) {
        
    }

}

?>