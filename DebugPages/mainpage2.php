<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../pages/head_import.php";?>
    <title>主页</title>
    <style>
        div a img{
            border-top-left-radius: 10px;border-top-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;
        }
        a img:hover
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
            <img src="../src/pic/5cee51cd7b899e517f23450a4ea7d933c8950d17.jpg" alt="" >
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="../src/pic/5cee51cd7b899e517f23450a4ea7d933c8950d17.jpg" alt="...">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="../src/pic/5cee51cd7b899e517f23450a4ea7d933c8950d17.jpg" alt="...">
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
    <h2>AAA</h2>
    <div class="row">
        <div class="col-xs-10 ">
        <div class="col-xs-3  thumbnail" >
            <a href="#" style="margin-bottom: 100px">
                <img src="../src/pic/dnf.jpg" >
            </a>
            <br>
            <blockquote>
                <p>GGGGGG</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
            <div class="col-xs-4 col-xs-offset-6">
                <p><a href="#" class="btn btn-info" role="button">Read More</a></p>
            </div>
        </div>
        <div class="col-xs-3 col-xs-offset-1 thumbnail">
            <a href="#" class="" >
                <img src="../src/pic/lxz.jpg" alt="" id="picture1" >
            </a>
            <br>
            <blockquote>
                <p>AAAAAA</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
            <div class="col-xs-4 col-xs-offset-6">
                <p><a href="#" class="btn btn-info" role="button">Read More</a></p>
            </div>
        </div>
        <div class="col-xs-3  col-xs-offset-1 thumbnail">
            <a href="#" class="" >
                <img src="../src/pic/5cee51cd7b899e517f23450a4ea7d933c8950d17.jpg" alt="..." style="">
            </a>
            <br>
            <blockquote>
                <p>BBBBBB</p>
                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
            <div class="col-xs-4 col-xs-offset-6">
                <p><a href="#" class="btn btn-info" role="button">Read More</a></p>
            </div>
        </div>
        </div>
    </div>
<hr>
    <h2>BBB</h2>
    <div class="row">
        <div class="col-xs-10 ">
            <div class="col-xs-3  thumbnail" >
                <a href="#" >
                    <img src="../src/pic/82ecad4c510fd9f952fefe77292dd42a2934a4dc.jpg"  >
                    <div class=""></div>
                </a>
                <br>
                <blockquote>
                    <p>CCCCCC</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <div class="col-xs-4 col-xs-offset-6">
                    <p><a href="#" class="btn btn-info" role="button">Read More</a></p>
                </div>
            </div>
            <div class="col-xs-3 col-xs-offset-1 thumbnail">
                <a href="#" class="" >
                    <img src="../src/pic/c0f83d13632762d09c930794acec08fa513dc605.jpg" alt="..." style="border-top-left-radius: 3px;border-top-right-radius: 3px;border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;">
                </a>
                <br>
                <blockquote>
                    <p>EEEEEE</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <div class="col-xs-4 col-xs-offset-6">
                    <p><a href="#" class="btn btn-info" role="button">Read More</a></p>
                </div>
            </div>
            <div class="col-xs-3  col-xs-offset-1 thumbnail">
                <a href="#" class="" >
                    <img src="../src/pic/dnf.jpg" alt="..." style="border-top-left-radius: 3px;border-top-right-radius: 3px;border-bottom-left-radius: 3px;border-bottom-right-radius: 3px;">
                </a>
                <br>
                <blockquote>
                    <p>FFFFFF</p>
                    <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
                <div class="col-xs-4 col-xs-offset-6">
                    <p><a href="#" class="btn btn-info" role="button">Read More</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-3 col-xs-offset-8">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li>
                    <a href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li>
                    <a href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</div>



<?php include "../text/footer_block.php";?>
</body>
</html>