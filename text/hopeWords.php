<?php
$main=60;
$forum=50;
$back=10;

?>
<style>.serif{font-family: "Arial","Microsoft YaHei","黑体","宋体",sans-serif;}</style>
<div class="container">
    <div class="page-header ">
        <h1 class="serif" style="text-align: center;color: #3b3d3a">我们现在的开发进度</h1>
        <div style="text-align: center;font-family:" class="serif">OUR CURRENT SOFTWARE DEVELOPING PROGRESS</div>
    </div>
    <div class="col-xs-10 col-xs-offset-1">
        <div class="row">
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $main?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $main?>%;">
                    首页开发 <?php echo $main?>%
                </div>
            </div>
            <button class="btn btn-success btn-block" type="button">首页开发日志</button>
        </div>
        <hr>
        <div class="row">
            <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $forum?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $forum?>%;">
                    论坛开发 <?php echo $forum?>%
                </div>
            </div>
            <button class="btn btn-warning btn-block" type="button">论坛开发日志</button>
        </div>
        <hr>
        <div class="row">
            <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $back?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $back?>%;">
                    后台管理 <?php echo $back?>%
                </div>
            </div>
            <button class="btn btn-danger btn-block" type="button">后台管理开发日志</button>
        </div>
    </div>
</div>

