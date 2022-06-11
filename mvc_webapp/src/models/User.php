<?php

class UserModel {

    protected $usernames;
    protected $password;
    protected $real_name;
    protected $email;
    protected $phone_number;
    protected $type;
    // TODO: Chua toan bo thong tin user luon, bap gom ca admin lan user thuong

    // Khoi tạo các biến cần thiết ở đây, đỡ mất công chạy query liên tục
    function __construct($usernames, $password){
        $this->usernames = $usernames;
        $this->password = $password;
    }

    function getInformation() {

    }

    function updateInformation() {

    }

    // function deleteAccount() {

    // }


}

?>