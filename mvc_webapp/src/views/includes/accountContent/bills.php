<?php
    // A prototype for a bill detail, which includes the service name, bill Id and date
    class billDetail {
        public $servicesName;
        public $billId;
        public $billDate;

        public function __construct($name, $id, $date)
        {
            $this->servicesName = $name;
            $this->billId = $id;
            $this->billDate = $date;
        }
    }

    // List of bills taken from database
    $billList = [];
?>
<div class="headingSection">
    <div class="settingsHeading">Dịch vụ đã sử dụng</div>
    <div class="settingsDesc">Xem lại lịch sử sử dụng dịch vụ</div>
</div>
<div class="innerSection">
    <?php
        foreach ($billList as $e) {
            echo "
                <div class='billRow'>
                    <div class='billName'>".$e->servicesName."</div>
                    <div class='billId'>".$e->billId."</div>
                    <div class='billDate'>".$e->billDate."</div>
                </div>";
        }
    ?>
</div>