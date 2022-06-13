<?php

class UserModel {

    public $usernames;
    public $password;
    public $real_name;
    public $email;
    public $phone_number;
    public $type;
    // TODO: Chua toan bo thong tin user luon, bap gom ca admin lan user thuong

    // Khoi tạo các biến cần thiết ở đây, đỡ mất công chạy query liên tục
    function __construct($usernames, $password){
        $this->usernames = $usernames;
        $this->password = $password;
    }

    // function check() {
    //     $this->real_name = "C";
    //     $this->email= "C";
    //     $this->phone_number= "C";
    //     $this->type= "admin";
    //     return true;
    // }

    function login() {
        // TODO: kiem tra user coi co o trong Database khong
        // $this->type = 'admin';
        return true;
    }

    function register() {
        // TODO: dang ky user vo trong he thong
    }

    function changePassword($username, $password) {

    }

    function changeInfo($password, $real_name, $email, $phone_number, $type){

    }
}

?>