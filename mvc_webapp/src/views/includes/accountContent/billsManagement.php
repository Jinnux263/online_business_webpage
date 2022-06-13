<?php
    // A prototype for a bill detail, which includes the service name, bill Id and date
    class customerDetail {
        public $customerName;
        public $customerEmail;
        public $customerTel;

        public function __construct($name, $email, $tel)
        {
            $this->customerName = $name;
            $this->customerEmail = $email;
            $this->custerTel = $tel;
        }
    }

    class billAdminDetail {
        public $servicesName;
        public $billId;
        public $billDate;
        public $customerInfo;

        public function __construct($sName, $id, $date, $cName, $email, $tel)
        {
            $this->servicesName = $sName;
            $this->billId = $id;
            $this->billDate = $date;
            $this->customerInfo = new customerDetail($cName, $email, $tel);
        }
    }

    // List of bills taken from database
    $billAdminList = [];
?>
<div class="headingSection">
    <div class="settingsHeading">Quản lý đơn đặt dịch vụ</div>
    <div class="settingsDesc">Xem và xóa đơn đặt dịch vụ</div>
</div>
<div class="innerSection">
    <?php 
        foreach ($billAdminList as $e) {
            echo "
                <div class='billRow'>
                    <div class='firstRow'>
                        <div class='billName'>".$e->servicesName."</div>
                        <div class='billId'>".$e->billId."</div>
                        <div class='billDate'>".$e->billDate."</div>
                    </div>
                    <div class='secondRow'>
                        <div class='billCustomer'>".$e->customerInfo->customerName."</div>
                        <div class='customerEmail'>".$e->customerInfo->customerEmail."</div>
                        <div class='custerTel'>".$e->customerInfo->customerTel."</div>
                    </div>
                    <div class='removeButton'>Xóa đơn</div>
                </div>";
        }
    ?>
</div>