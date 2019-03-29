<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../pages/head_import.php";?>
    <title>主页</title>
    <style>
        .Cor{
            color: #010101;
        }
        a img:hover
        {
            opacity:0.4;
        }
        a h4:hover
        {
            opacity:0.4;
        }
        a footer:hover
        {
            opacity:0.4;
        }
    </style>

</head>

<body>
<?php include "../pages/navigator.php"; ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" style="height: 300px;">
        <div class="item active">
            <img src="" alt="" >
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-9 col-sm-8 col-sm-offset-8 col-xs-8 col-md-8 col-md-offset-8">
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only">Search</label>
                    <input type="text"   class="form-control input-sm" id="SearchInput" placeholder="搜索板块，帖子，用户">
                </div>
                <button type="search" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-search"></span> 搜索 </button>

            </form>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-group">
                <li class="list-group-item bg-primary" style="background-color: #2e6da4;">板块</li>
            </ul>
        </div>
    </div>

<div class="container">
    <div class="jumbotron" style="background-color: #fafafa">

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
                                <h4>紫罗兰永恒花园</h4>
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
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="../pages/forum_demo.php?forum_id=1" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="https://s2.ax1x.com/2019/03/28/AdW5O1.png" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                        </div>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="Cor">
                                <h4>辉夜大小姐想让我告白</h4>
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
            </div>
        </div>
        <br>
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
            </div>
        </div>

        <br>
        <h3>游戏区</h3><hr>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="../pages/forum_demo.php?forum_id=6" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="https://s2.ax1x.com/2019/03/28/Adf9Tf.png" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                        </div>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="Cor">
                                <h4>只狼·影逝二度</h4>
                                <?php

                                $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='6'");
                                $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='6'");

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
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="../pages/forum_demo.php?forum_id=7" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="https://s2.ax1x.com/2019/03/28/AdfitS.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                        </div>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="Cor">
                                <h4>隐形守护者</h4>
                                <?php

                                $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='7'");
                                $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='7'");

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
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="../pages/forum_demo.php?forum_id=8" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="https://s2.ax1x.com/2019/03/28/AdWjld.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                        </div>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="Cor">
                                <h4>英雄联盟</h4>
                                <?php

                                $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='8'");
                                $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='8'");

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
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-4">
                <a href="../pages/forum_demo.php?forum_id=9" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="https://s2.ax1x.com/2019/03/28/AdWbFO.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                        </div>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="Cor">
                                <h4>地下城与勇士</h4>
                                <?php

                                $result_list=$mysqli->query("select count(forum_id) from bbs_list where forum_id='9'");
                                $result_time=$mysqli->query("select DATE_FORMAT(max(post_time),'%m月%d日 %H:%i') from bbs_list where forum_id='9'");

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
            </div>
        </div>

        <br>
        <h3>体育区</h3><hr>
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
            </div>
        </div>
    </div>
    </div>
</div>

<?php include "../text/footer_block.php";?>
</body>
</html>