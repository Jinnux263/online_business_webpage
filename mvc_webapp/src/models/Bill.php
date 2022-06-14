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
        $billList = [];

        for ($i = 0; $i < 5; $i++) {
            $billList[$i] = new billAdminDetail("Dịch vụ tư vấn tâm lý trực tiếp", "#009849", "12/2/2022", "Lê Van Dovious Panda", "dvs_pd@ppy.sh", "0727 727 727");
        }
        
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