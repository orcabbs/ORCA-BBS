<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-03-28
 * Time: 23:13
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>ORCA</title>
</head>
<body background="../src/pic/memphis-colorful.png">
<?php include "navigator.php"?>
<div class="container">
    <div class="col-xs-12">
        <ul class="list-group">
            <li class="list-group-item bg-primary" style="background-color: #2e6da4">所有板块 <span class="glyphicon glyphicon-triangle-bottom"></span></li>
            <li class="list-group-item">
                <div class="container-fluid">
                    <h3>动漫区</h3>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="../pages/forum_demo.php?forum_id=1" class="" name="">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="https://s2.ax1x.com/2019/03/28/AdW7TK.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <div class="Cor">
                                            <h4 style="color: #d20000">紫罗兰永恒花园</h4>
                                            <?php
                                            include "../pages/sql_config.php";

                                            $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='1'");
                                            $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='1'");

                                            $num=$result_list->fetch_array();
                                            $time=$result_time->fetch_array();

                                            $html_num=<<<eof
                                <footer>帖子数: {$num[0]}</footer>
                                <footer>最后发表: $time[0]</footer>
eof;
                                            echo $html_num;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="../pages/forum_demo.php?forum_id=2" class="" name="">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="https://s2.ax1x.com/2019/03/28/AdWTw6.png" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <div class="Cor">
                                            <h4>刀剑神域 Alicization</h4>
                                            <?php

                                            $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='2'");
                                            $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='2'");

                                            $num=$result_list->fetch_array();
                                            $time=$result_time->fetch_array();

                                            $html_num=<<<eof
                                <footer>帖子数: {$num[0]}</footer>
                                <footer>最后发表: $time[0]</footer>
eof;
                                            echo $html_num;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="../pages/forum_demo.php?forum_id=3" class="" name="">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="https://s2.ax1x.com/2019/03/28/AdW5O1.png" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <div class="Cor">
                                            <h4>辉夜大小姐</h4>
                                            <?php

                                            $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='3'");
                                            $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='3'");

                                            $num=$result_list->fetch_array();
                                            $time=$result_time->fetch_array();

                                            $html_num=<<<eof
                                <footer>帖子数: {$num[0]}</footer>
                                <footer>最后发表: $time[0]</footer>
eof;
                                            echo $html_num;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="../pages/forum_demo.php?forum_id=4" class="" name="">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="https://s2.ax1x.com/2019/03/28/AdfSmt.png" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <div class="Cor">
                                            <h4>魔法禁书目录第三季</h4>
                                            <?php

                                            $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='5'");
                                            $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='4'");

                                            $num=$result_list->fetch_array();
                                            $time=$result_time->fetch_array();

                                            $html_num=<<<eof
                                <footer>帖子数: {$num[0]}</footer>
                                <footer>最后发表: $time[0]</footer>
eof;
                                            echo $html_num;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="../pages/forum_demo.php?forum_id=5" class="" name="">
                                <div class="row">

                                    <div class="col-xs-3">
                                        <img src="https://s2.ax1x.com/2019/03/28/AdWoex.png" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <div class="Cor">
                                            <h4>JOJO的奇妙冒险</h4>
                                            <?php

                                            $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='5'");
                                            $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='5'");

                                            $num=$result_list->fetch_array();
                                            $time=$result_time->fetch_array();

                                            $html_num=<<<eof
                                <footer>帖子数: {$num[0]}</footer>
                                <footer>最后发表: $time[0]</footer>
eof;
                                            echo $html_num;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="container-fluid">
                    <h3>体育区</h3>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="../pages/forum_demo.php?forum_id=10" class="" name="">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="https://s2.ax1x.com/2019/03/28/AdWv6A.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <div class="Cor">
                                            <h4>足球</h4>
                                            <?php

                                            $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='10'");
                                            $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='10'");

                                            $num=$result_list->fetch_array();
                                            $time=$result_time->fetch_array();

                                            $html_num=<<<eof
                                    <footer>帖子数: {$num[0]}</footer>
                                    <footer>最后发表: $time[0]</footer>
eof;
                                            echo $html_num;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <a href="../pages/forum_demo.php?forum_id=11" class="" name="">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <img src="https://s2.ax1x.com/2019/03/28/AdWxOI.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                    </div>
                                    <div class="col-xs-8 col-xs-offset-1">
                                        <div class="Cor">
                                            <h4>篮球</h4>
                                            <?php

                                            $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='11'");
                                            $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='11'");

                                            $num=$result_list->fetch_array();
                                            $time=$result_time->fetch_array();

                                            $html_num=<<<eof
                                    <footer>帖子数: {$num[0]}</footer>
                                    <footer>最后发表: $time[0]</footer>
eof;
                                            echo $html_num;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <br>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-4">
                        <a href="../pages/forum_demo.php?forum_id=12" class="" name="">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="https://s2.ax1x.com/2019/03/28/AdWXSH.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                                </div>
                                <div class="col-xs-8 col-xs-offset-1">
                                    <div class="Cor">
                                        <h4>电竞</h4>
                                        <?php

                                        $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='12'");
                                        $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='12'");

                                        $num=$result_list->fetch_array();
                                        $time=$result_time->fetch_array();

                                        $html_num=<<<eof
                                <footer>帖子数: {$num[0]}</footer>
                                <footer>最后发表: $time[0]</footer>
eof;
                                        echo $html_num;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <br>
                    </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>
<?php include "../text/footer_block.php";?>
</body>

<div class="row">