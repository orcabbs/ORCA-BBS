<?php
include "sql_config.php";
?>
<!--导航栏-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-for-all">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
<!--            <a class="navbar-brand" href="index.php"><img src="src/pic/orcalogo.png" alt="Brand" style="max-width: 60px;margin-top: -7px;"></a>-->
            <a class="navbar-left" href="index.php"><img src="../src/pic/orcalogo.png" alt="Brand" style="width: 73px"></a>
            <a class="navbar-left" href="index.php"><img src="../src/pic/orca_font3.png" alt="Brand" style="width: 170px"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-for-all">
<!--            <ul class="nav navbar-nav navbar-right"></ul>-->
            <ul class="nav navbar-nav navbar-right">
                <?php
                header('Content-type:text/html; charset=utf-8');
                // 开启Session
                session_start();
                // 首先判断Cookie是否有记住了用户信息
                if (isset($_COOKIE['user_email'])) {
                    # 若记住了用户信息,则直接传给Session
                    $_SESSION['user_email'] = $_COOKIE['user_email'];
                    $_SESSION['islogin'] = 1;
                }
                if (isset($_SESSION['islogin'])) {
                    // 若已经登录
                    $user_email_tmp=$_SESSION['user_email'];
                    $result_tmp=$mysqli->query("select * from bbs_account where bbs_account.user_email='$user_email_tmp'");
                    $row_tmp=$result_tmp->fetch_array();
                    $user_name_tmp=$row_tmp['user_name'];
                    $html_more= <<<eof
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <div style="display: inline;color: #2e6da4;">${user_name_tmp}</div>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">个人信息</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php">注销</a></li>
                        </ul>
                    </li>
                    <li><a class="disabled">欢迎回来</a></li>

eof;
                    echo $html_more;
                } else {
                    // 若没有登录
                    // do something
                }
                ?>
                <?php
                    if(!isset($_SESSION['islogin'])){
                        $reAndLogin=<<<eof
                        <!--<div class="btn-group" role="group" aria-label="...">-->
                            <!--<button type="button" class="btn btn-default navbar-btn">登陆</button>-->
                            <!--<button type="button" class="btn btn-default navbar-btn">注册</button>-->
                        <!--</div>-->
                        <li><a href='login.php'>登陆</a></li>
                        <li><a href='register.php'>注册</a></li>
eof;
                        echo $reAndLogin;
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
<?php
?>
