<?php
    class userData {
        public $userName;
        public $realName;
        public $email;
        public $tel;

        public function __construct($uName, $rName, $email, $tel)
        {
            $this->userName = $uName;
            $this->realName = $rName;
            $this->email = $email;
            $this->tel = $tel;
        }
    }

    $userData;
?>
<div class="headingSection">
    <div class="settingsHeading">Thông tin tài khoản</div>
    <div class="settingsDesc">Chỉnh sửa thông tin tài khoản của bạn</div>
</div>
<div class="innerSection">
    <div class="optionRow">
        <div class="label">Tên đăng nhập</div>
        <div class="optionContent"><?php $userData->userName; ?></div>
    </div>
    <div class="optionRow">
        <div class="label">Tên khách hàng</div>
        <div class="optionContent">
            <input type="text" id="realName" name="realName" value="<?php $userData->realName ?>">
        </div>
    </div>
    <div class="optionRow">
        <div class="label">Email</div>
        <div class="optionContent">
            <input type="email" id="email" name="email" value="<?php $userData->email ?>">
        </div>
    </div>
    <div class="optionRow">
        <div class="label">Số điện thoại</div>
        <div class="optionContent">
            <input type="tel" id="tel" name="tel" value="<?php $userData->tel ?>">
        </div>
    </div>
    <div class="optionRow">
        <div class="label"></div>
        <div class="optionContent">
            <div class="confirmButton">Lưu</div>
        </div>
    </div>
</div>
