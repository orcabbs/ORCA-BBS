<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>主页</title>
</head>

<body background="../src/pic/memphis-colorful.png">
<?php include "navigator.php"; ?>
<div class="container">
    <!--标题-->
    <div class="row">
        <div class="jumbotron col-xs-12" style="color: #fff ;background-image:url(../src/pic/LJXhero.jpg)">
            <h1>
                <span>
                        <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Welcome to
                    </span>
                <span style="color: #dafaff">ORCA</span>
            </h1>
            <p>...</p>
        </div>
    </div>
    <!--搜索框和按钮-->
    <div class="col-xs-8 col-xs-offset-8">
        <form class="form-inline">
            <div class="form-group">
                <label class="sr-only">Search</label>
                <input type="text" style="width: 300px;"  class="form-control input-sm" id="SearchInput" placeholder="搜索板块，帖子，用户">
            </div>
            <button type="search" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-search"></span> 搜索 </button>
        </form>
    </div>


    <hr><hr>
    <!---->
    <div class="row">
        <!--左边板块导航栏-->
        <div class="list-group col-xs-2">
            <a class="list-group-item "style="color: #fff ;background-image:url(../src/pic/LJXhero.jpg)">
                板块
            </a>
            <a href="#" class="list-group-item">DNF</a>
            <a href="#" class="list-group-item">英雄联盟</a>
            <a href="#" class="list-group-item">黑暗之魂3</a>
            <a href="#" class="list-group-item">彩虹六号</a>
        </div>
        <!--帖子-->
        <div class="panel col-xs-10"style="color: #fff ;background-image:url(../src/pic/LJXhero.jpg)">
            <div class="panel-heading"style="height:30px; color: #fff ;background-image:url(../src/pic/LJXhero.jpg)">
                <h4>帖子</h4>
            </div>
            <div class="panel-body"> </div>

            <!-- List group -->
            <ul class="list-group">
                <li class="list-group-item "style="height: 100px">
                    <div>
                        <a href="#">【置顶】DNF板块发贴须知</a>
                    </div>
                </li>
                <li class="list-group-item "style="height: 100px">
                    <div>
                        <a href="#">【求助大佬】我这身装备可以打漩涡吗</a>
                    </div>
                </li>
                <li class="list-group-item "style="height: 100px">
                    <div>
                        <a href="#">阿修罗天下第一 红狗滚出克！！</a>
                    </div>
                </li>
                <li class="list-group-item "style="height: 100px">
                    <div>
                        <a href="#">毕业票出三件95A什么水平</a>
                    </div>
                </li>
            </ul>

        </div>
        <!--分页栏-->
        <div class="col-xs-3 col-xs-push-10">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php include "../text/footer_block.php";?>
</body>
</html>