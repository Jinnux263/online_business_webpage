<?php

class RegisterModel {

    protected $usernames;
    protected $password;
    protected $type;

    function __construct($usernames, $password){
        $this->usernames = $usernames;
        $this->password = $password;
    }

    function register() {
        // TODO: dang ky user vo trong he thong
        return true;
    }

}

?>