<?php
    // Prototype for a product detail, which includes doctor's name, description, price and image.
    class servicesAdminDetail {
        public $servicesId;
        public $servicesName;
        public $servicesDesc;
        public $servicesPrice;
        public $servicesImg;

        public function __construct($id, $name, $desc, $price, $img)
        {
            $this->servicesId = $id;
            $this->servicesName = $name;
            $this->servicesDesc = $desc;
            $this->servicesPrice = $price;
            $this->servicesImg = $img;
        }
    }

    // A list of productsDetail given by the database
    $servicesAdminList = [];
?>
<script src="deps/services.js"></script>
<div class="headingSection">
    <div class="settingsHeading">Quản lý dịch vụ</div>
    <div class="settingsDesc">Chỉnh sửa các thông tin liên quan đến dịch vụ</div>
</div>
<div class="innerSection">
    <?php
        foreach ($servicesAdminList as $e) {
            echo '
            <div class="servicesBox">
                <div class="label">Id dịch vụ</div>
                <input type="text" id="servicesId-1" class="servicesInput" value="'.$e->servicesId.'">
                <div class="label">Tên dịch vụ</div>
                <input type="text" id="servicesName-1" class="servicesInput" value="'.$e->servicesName.'">
                <div class="label">Mô tả dịch vụ</div>
                <input type="text" id="servicesDoc-1" class="servicesInput" value="'.$e->servicesDesc.'">
                <div class="label">Giá</div>
                <input type="text" id="servicesLength-1" class="servicesInput" value="'.$e->servicesPrice.'">
                <div class="remover" onclick="removeBox(this)">-</div>
            </div>';
        }
    ?>
    <div class="addBox" onclick="addServicesBox()">+</div>
</div>