<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>注册账号</title>
    <script type="text/javascript">
        // $(function(){
        //     $("#myModal").modal({
        //         keyboard: true
        //     });
        // });
    </script>
</head>

<body onload="onloadVeri()">
<!--导航栏-->
<?php include "navigator.php"; ?>
<div class="container">
    <!--登陆文字-->
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 page-header">
            <h1>注册
                <small>Register </small>
            </h1>
        </div>
    </div>
<!--    模态框-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h4 class="modal-title" id="myModalLabel">ORCA-论坛服务条款</h4>
                </div>
                <div class="modal-body">
                    <?php include "../text/clause.php";?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">同意</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">不同意</button>
                </div>
            </div>
        </div>
    </div>
<!--    模态框结束-->
    <!--登陆表格-->
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <form name="form_login" action="register.php" method="post">

                <div class="form-group">
                    <label for="InputName1">Nickname</label>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input type="text" class="form-control" placeholder="Nickname" id="InputName1" name="user_name">
                    </div>
                </div>

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
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="verfiyCode">Verification code</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">
                                    <span class="glyphicon glyphicon-paste"></span>
                                </span>
                                <input type="text" class="form-control" placeholder="Verification" id="verfiyCode" name="verfiy_Code" style="height: 40px;">

                                <span class="input-group-addon" id="basic-addon3" style="padding: 3px">
                                    <img src="./plugins/generate_VerifyCode.php" alt="" width="90px" height=30px" style="cursor: pointer" onClick="this.src='./plugins/generate_VerifyCode.php?nocache='+Math.random()">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="permission"> 同意<a data-toggle="modal" data-target="#myModal">网站服务条款</a>
                    </label>
                </div>
                <br>

                <div class="btn-group" role="group">
                    <button type="submit" class="btn btn-default" name="register_btn" id="register_btn">
                        <span class="glyphicon glyphicon-ok"></span> 确认注册
                    </button>
                </div>
                <hr>
                <div>
                    <?php
                    include "sql_config.php";
                    $isCorrectAuth=true;
                    if (isset($_POST['verfiy_Code'])) {
                        session_start();
                        if (strtolower($_POST['verfiy_Code'])==$_SESSION['authcode']) {

                        }
                        else{
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "验证码输入错误，请重新输入";
                            echo "</div>";
                            $isCorrectAuth=false;
                        }
                    }
                    if(isset($_POST['user_email'])&&$isCorrectAuth){
                        $user_name=$_POST['user_name'];
                        $user_email=$_POST['user_email'];
                        $user_password=$_POST['user_password'];
                        $result_email=$mysqli->query("select * from qdm178341200_db.bbs_account where user_email='$user_email'");
                        $result_name=$mysqli->query("select * from qdm178341200_db.bbs_account where user_name='$user_name'");
                        if (($user_name == '') || ($user_password == '') || ($user_email=='')) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "昵称，电子邮箱，密码都不能为空";
                            echo "</div>";
                        }
                        elseif ($_POST['permission']==false){
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "请查看并勾选同意网站服务条款";
                            echo "</div>";
                        }
                        elseif (!filter_var($user_email,FILTER_VALIDATE_EMAIL)) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "电子邮箱格式错误，请重新输入";
                            echo "</div>";
                        }
                        elseif($_POST['verfiy_Code']==''){
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "请输入验证码";
                            echo "</div>";
                        }
                        elseif (mb_strlen($user_password,"utf-8")<6){
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "密码长度至少为6位，请重新输入";
                            echo "</div>";
                        }
                        elseif ($result_email->num_rows!=0) {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "电子邮箱已被占用，请重新输入";
                            echo "</div>";
                        }
                        elseif ($result_name->num_rows!=0){
                            echo "<div class=\"alert alert-danger\" role=\"alert\">";
                            echo "昵称已被占用，请重新输入";
                            echo "</div>";
                        }
                        else{
                            $mysqli->query("insert into bbs_account(user_name,user_email,user_password) values ('$user_name','$user_email','$user_password')");
                            echo "<script type=\"text/javascript\">setTimeout(\"window.location.href='login.php'\",1000);</script>";
                            echo "<div class=\"alert alert-success\" role=\"alert\">";
                            echo "注册成功！正在载入登陆界面...";
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php //include "Live2D_initialize.php"?>
</body>
<script>
</script>
</html>

