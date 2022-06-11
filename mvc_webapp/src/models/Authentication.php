<?php

class Authentication {


    protected $usernames;
    protected $password;
    protected $real_name;
    protected $email;
    protected $phone_number;
    protected $type;
    // TODO: Chua toan bo thong tin user luon, bap gom ca admin lan user thuong

    function __construct($usernames, $password){
        $this->usernames = $usernames;
        $this->password = $password;
    }

    static function checkAuthentication(){
        if (isset($_SESSION['usernames']) and isset($_SESSION['password'])) {
            // kiem tra coi co trong he thong khong thi dua no toi trang login
            // header('Location:');
        } 
    }

    static function login($usernames, $password) {
        // TODO: kiem tra user coi co o trong Database khong
        $_SESSION['usernames'] = $usernames;
        $_SESSION['password'] = $password;
        return true;
    }

    static function register() {
        // TODO: dang ky user vo trong he thong
        return true;
    }

    static function changePassword(){

    }

}

?>