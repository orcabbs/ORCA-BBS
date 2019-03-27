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
    <div class="carousel-inner" role="listbox" style="height: 300px">
        <div class="item active">
            <img src="../src/pic/bk_pic2.jpg" alt="" >
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="../src/pic/bk_pic2.jpg" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="../src/pic/bk_pic2.jpg" alt="...">
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
        <div class="col-xs-8 col-xs-offset-8">
            <form class="form-inline">
                <div class="form-group">
                    <label class="sr-only">Search</label>
                    <input type="text" style="width: 300px;"  class="form-control input-sm" id="SearchInput" placeholder="搜索板块，帖子，用户">
                </div>
                <button type="search" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-search"></span> 搜索 </button>
            </form>
        </div>
    </div>
    <br>
    <div class="col-xs-12">
        <ul class="list-group">
            <li class="list-group-item bg-primary" style="background-color: #2e6da4;width: 1140px">板块</li>
        </ul>
    </div>
<div class="container">
    <div class="jumbotron"style="background-color: #fafafa">

        <h3>AAA</h3>
        <hr>
        <div class="row">
            <div class="col-xs-4">
                <a href="forum_demo.php?forum_id=1" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="../src/pic/bk_pic1.jpg" style="width: 80px;height: 80px;border-top-left-radius: 5px;border-top-right-radius: 5px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px">
                        </div>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="Cor">
                                <h4>紫罗兰永恒花园</h4>
                                <footer>帖子数: 182</footer>
                                <footer>最后发表: 1小时前</footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-music"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h4>GGGGG</h4>
                                <footer>帖子数: 182</footer>
                                <footer>最后发表: 1小时前</footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-list-alt"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h4>GGGGG</h4>
                                <footer>帖子数: 182</footer>
                                <footer>最后发表: 1小时前</footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-book"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h4>GGGGG</h4>
                                <footer>帖子数: 182</footer>
                                <footer>最后发表: 1小时前</footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-send"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h4>GGGGG</h4>
                                <footer>帖子数: 182</footer>
                                <footer>最后发表: 1小时前</footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <br>
        <h3>BBB</h3><hr>
        <div class="row">
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-tree-conifer"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h3>GGGGG</h3>
                                <footer>Someone famous in <cite title="Source Title"></cite></footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-phone-alt"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h3>GGGGG</h3>
                                <footer>Someone famous in <cite title="Source Title"></cite></footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <br>
        <h3>CCC</h3><hr>
        <div class="row">
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-scissors"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h3>GGGGG</h3>
                                <footer>Someone famous in <cite title="Source Title"></cite></footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-leaf"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h3>GGGGG</h3>
                                <footer>Someone famous in <cite title="Source Title"></cite></footer>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-4">
                <a href="#" class="" name="">
                    <div class="row">
                        <div class="col-xs-3">
                            <h1>
                                <span class="glyphicon glyphicon-apple"></span>
                            </h1>
                        </div>
                        <div class="col-xs-9">
                            <div>
                                <h3>GGGGG</h3>
                                <footer>Someone famous in <cite title="Source Title"></cite></footer>
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