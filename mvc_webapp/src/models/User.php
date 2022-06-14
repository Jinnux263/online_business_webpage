<?php
require_once APP_ROOT . '/src/models/ModelHelper.php';
class UserModel {

    public $usernames;
    public $password;
    public $real_name;
    public $email;
    public $phone_number;
    public $type;
    // TODO: Chua toan bo thong tin user luon, bap gom ca admin lan user thuong

    function __construct($usernames, $password){
        // Khoi tạo các biến cần thiết ở đây, đỡ mất công chạy query liên tục

        $this->usernames = $usernames;
        $this->password = $password;
    }

    function login() {
        $DB = new Database();
        $DBconn = $DB->getInstance();
        $result = $DBconn->query("SELECT * FROM users WHERE USERNAME = '" . $this->usernames .  "' AND PASSWORD = '" . $this->password . "';");

        $user = ($result->fetch_array());
        // echo "result is: " . $result->num_rows;
        // print_r($user);

        // return false;
        if (!$user) {
            return false;
        } else {
            $this->real_name = $user['REALNAME'];
            $this->email = $user['EMAIL'];
            $this->phone_number = $user['PHONENUM'];
            $this->type = $user['USER_TYPE'];
            return true;
        }
    }

    function register() {
        $DB = new Database();
        $DBconn = $DB->getInstance();
        $result = $DBconn->query("");



    }

    function changePassword($username, $password) {

    }

    function changeInfo($password, $real_name, $email, $phone_number, $type){

    }
}

?>