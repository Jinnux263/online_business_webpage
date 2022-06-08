<?php

class UserModel {

    protected $usernames;
    protected $password;
    protected $type;
    // TODO: Chua toan bo thong tin user luon

    function __construct($usernames, $password){
        $this->usernames = $usernames;
        $this->password = $password;
    }

    static function login($username, $password) {
        //TODO: Kiem tra coi co nguoi dung khong
        return true;
    }

    function getAllInformation() {

    }

    function updateInformation() {

    }

    // function deleteAccount() {

    // }


}

?>