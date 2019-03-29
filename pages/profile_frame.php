<?php
if (isset($_COOKIE['user_email'])) {
    $_SESSION['user_email'] = $_COOKIE['user_email'];
    $_SESSION['islogin'] = 1;
}
if (isset($_SESSION['islogin'])) {
    $user_email_tmp=$_SESSION['user_email'];
    $result_tmp=$mysqli->query("select * from bbs_account where bbs_account.user_email='$user_email_tmp'");
    $row_tmp=$result_tmp->fetch_array();
    $user_name_tmp=$row_tmp['user_name'];
    $random_number=rand(1,10000);
    $html_profile= <<<eof
    <div class="thumbnail">
        <img src="https://www.thiswaifudoesnotexist.net/example-${random_number}.jpg" alt="..." class="img-circle" style="border: #94ccc1 4px solid">
        <div class="caption">
            <h3 class="text-center">${user_name_tmp}</h3>
            <p class="text-center" style="color: #8c8c8c">${user_email_tmp}</p>
            <p class="text-center">
                <a href="logout.php" class="btn btn-danger" role="button">登出</a>
                <a href="#" class="btn btn-info" role="button">编辑</a>
            </p>
        </div>
    </div>

eof;
    echo $html_profile;


} else {
    $html_profile= <<<eof
    <div class="thumbnail">
        <img src="../src/pic/head.jpeg" alt="..." class="img-circle" style="border: #94ccc1 4px solid">
        <div class="caption">
            <h3 class="text-center">未登陆</h3>
            <p class="text-center" style="color: #8c8c8c">请先登录或注册论坛</p>
            <p class="text-center">
                <a href="login.php" class="btn btn-primary" role="button">登陆</a>
                <a href="register.php" class="btn btn-default" role="button">注册</a>
            </p>
        </div>
    </div>

eof;
    echo $html_profile;
}
?>