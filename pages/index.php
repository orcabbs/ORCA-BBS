<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>ORCA 首页</title>

</head>
<body background="../src/pic/memphis-colorful.png">
<!--导航栏-->
<?php include "navigator.php"; ?>
<div class="container">
    <div class="row clearfix">
        <div class="col-xs-12 column">
            <div class="jumbotron" style="color: #fff;background-image: url(../src/pic/LJXheroCompressed.png)" >
                <h1>
                    <span>
                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span> 你好,
                    </span>
                    <span style="color: #ffffff">ORCA</span>
                </h1>
                <div class="container">
                    <p>欢迎来到山东大学（威海）ORCA论坛。你可以注册一个帐号，以浏览更多精彩内容，并随时发布观点，与大家交流。</p>
                    <p>
                        <a class="btn btn-default btn-lg" href="test.php" style="opacity: 0.8">&nbsp;进入论坛（目前正在开发）&nbsp;
                            <span class="glyphicon glyphicon-arrow-right"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <?php include "../text/hopeWords.php";?>
    </div>


</div>
<?php include "Live2D_initialize.php";?>
<?php include "../text/footer_block.php";?>
</body>

