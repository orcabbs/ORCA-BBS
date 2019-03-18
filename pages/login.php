<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>登陆账户</title>
</head>

<body>
<!--导航栏-->
<?php include "navigator.php"; ?>
<div class="container">
    <!--登陆文字-->
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 page-header">
            <h1>登陆
                <small>Login </small>
            </h1>
        </div>
    </div>
    <!--登陆表格-->
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <form name="form_login" action="login.php" method="post">

                <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Email" id="InputEmail1" name="user_email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputPassword1">Password</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">
                            <span class="glyphicon glyphicon-rub"></span>
                        </span>
                        <input type="password" class="form-control" placeholder="Password" id="InputPassword1" name="user_password" >
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> 记住密码
                    </label>
                </div>
                <br>

                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-default" name="login_btn">
                        <span class="glyphicon glyphicon-log-in"></span> 登陆
                    </button>
                    <button type="button" class="btn btn-default" name="regi_btn" onclick="window.location.href='register.php'">
                        <span class="glyphicon glyphicon-registration-mark"></span> 注册
                    </button>
                </div>
                <hr>
                <?php
                include "sql_config.php";
                header('Context-type:text/html; charset=utf-8');
                session_start();
                if(isset($_POST['user_email'])){
                    $user_email=$_POST["user_email"];
                    $user_password=$_POST["user_password"];
                    $result=$mysqli->query("select * from qdm178341200_db.bbs_account where user_email='$user_email' and user_password='$user_password'");
                    if (($user_email == '') || ($user_password == '')) {
                        echo "<div class=\"alert alert-danger\" role=\"alert\">";
                        echo "电子邮箱，密码都不能为空";
                        echo "</div>";
                    } elseif ($result->num_rows==0) {
                        // 用户名或密码错误,同空的处理方式
                        echo "<div class=\"alert alert-danger\" role=\"alert\">";
                        echo "用户名或密码错误，请重新登陆";
                        echo "</div>";
                    }
                    else {
                        # 用户名和密码都正确,将用户信息存到Session中
                        $_SESSION['user_email'] = $user_email;
                        $_SESSION['islogin'] = 1;
                        // 若勾选7天内自动登录,则将其保存到Cookie并设置保留7天
                        if ($_POST['remember']==true) {
                            setcookie('user_email', $user_email, time()+7*24*60*60);
                            setcookie('code', md5($user_email.md5($user_password)), time()+7*24*60*60);
                        } else {
                            // 没有勾选则删除Cookie
                            setcookie('user_email', '', time()-999);
                            setcookie('code', '', time()-999);
                        }
                        // 处理完附加项后跳转到登录成功的首页
                        echo "<script type=\"text/javascript\">setTimeout(\"window.location.href='index.php'\",1000);</script>";
                        echo "<div class=\"alert alert-success\" role=\"alert\">";
                        echo "登陆成功！正在定向到主页...";
                        echo "</div>";
                    }
                }
                ?>

            </form>
        </div>
    </div>
</div>
<?php //include "Live2D_initialize.php"?>
</body>
<script>

</script>
</html>