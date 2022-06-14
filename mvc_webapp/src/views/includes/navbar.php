<?php
    // Information about login session
    if ($_SESSION['authenticated']) {
        $loggedStatus = $_SESSION['authenticated'];
        $username =$_SESSION['user'];
        $avatarURL = "https://pbs.twimg.com/profile_images/1522078259243982849/lnlVE1iL_400x400.jpg";
    } else {
        $loggedStatus = false;
        // $loggedStatus = true;
        // $username = "Try-Z";
        // $avatarURL = "https://pbs.twimg.com/profile_images/1522078259243982849/lnlVE1iL_400x400.jpg";
    }
?>
<div id="headerTab">
    <div class="btn" onclick="navigate('HomeController','home');">Trang chủ</div>
    <div class="btn" onclick="navigate('HomeController','about');">Thông tin</div>
    <div class="btn" onclick="navigate('ProductDetailController','products');">Bác sĩ</div>
    <div class="btn" onclick="navigate('ProductDetailController','pricing');">Dịch vụ</div>
    <div class="btn" onclick="navigate('HomeController','contact');">Liên hệ</div>
    <div class="btn" onclick="navigate('PostsController','news');">Tin tức</div>
    <?php
        if (!$loggedStatus)
            echo "<div class='btn login' onclick=\"navigate('AuthenticationController','index');\">Đăng nhập</div>";
        else {
            echo "
                <div class='btn loggedIn' onclick=\"navigate('UserController', 'account')\">
                    <div class='avatar' style='background: url(".$avatarURL.") center center/cover'></div>
                    <div class='username'>".$username."</div>
                </div>";
        }
    ?>
</div>