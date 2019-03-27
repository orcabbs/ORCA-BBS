<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-03-21
 * Time: 11:58
 */
@$forum_id=$_GET['forum_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>ORCA</title>
    <style>
    </style>
</head>

<body>
    <?php include "navigator.php"?>
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators" >
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="border-radius: 10px">
                <div class="item active">
                    <img src="../src/pic/violet3.jpg" alt="...">
                    <div class="carousel-caption">
                        VIOLET EVERGARDEN
                    </div>
                </div>
                <div class="item">
                    <img src="../src/pic/violet2.jpg" alt="...">
                    <div class="carousel-caption">
                        VIOLET EVERGARDEN
                    </div>
                </div>
                <div class="item">
                    <img src="../src/pic/violet1.jpg" alt="...">
                    <div class="carousel-caption">
                        VIOLET EVERGARDEN
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="border-radius: 10px">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="border-radius: 10px">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row" style="">
            <div class="container-fluid" style="">
                <ul class="pagination">
                    <li><a href="#">&nbsp;发帖 <span class="glyphicon glyphicon-triangle-bottom"></span>&nbsp;</a></li>
                </ul>
                <nav aria-label="Page navigation" class="pull-right">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo; 返回</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">下一页 &raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row" style="">
            <div class="col-md-2 hidden-sm hidden-xs column">
                <?php include "profile_frame.php"?>
            </div>
            <div class="col-md-10 column">
                <ul class="list-group">
                    <li class="list-group-item bg-primary" style="background-color: #2e6da4">全部主题 <span class="glyphicon glyphicon-triangle-bottom"></span></li>
                    <?php
                    $result_list=$mysqli->query("select * from bbs_list where forum_id='$forum_id' order by post_time desc");
//                                            echo $result_list->num_rows;
                    for($rows=1;$rows<=$result_list->num_rows;$rows++){
                        $row_result=$result_list->fetch_array();
                        $row_result_title=characet($row_result['title']);
//                        $rr=$row_result["title"];
                        $row_result_postID=characet($row_result['post_id']);


                        try{
                            $con=new mysqli('qdm178341200.my3w.com','qdm178341200','Orcabbs666','qdm178341200_db');
                        }catch(Exception $e){
                            echo $e->getMessage();
                        }
                        $accord_list=$con->query("call selectById('$row_result_postID')");
                        $accord_row=$accord_list->fetch_array();
                        $accord_result_content=mb_substr(strip_tags(characet($accord_row['floor_content'])),0,40);
                        $accord_result_time=characet($accord_row['post_time']);
                        $accord_result_email=characet($accord_row['floor_user_email']);

                        $con->close();

                        $html_insertRow= <<<eof
                            <li class="list-group-item ">
                                <div class="container-fluid">
                                    <div class="row">
                                    
                                        <div class="col-xs-1">
                                            <img src="../src/pic/head.jpeg" alt="" class="img-thumbnail" style="border: rgba(59,184,146,0.52) 2px solid;">
                                        </div>
                                        <div class="col-xs-9">
                                            <a href="" style="font-size: medium;"><p>${row_result_title}</p></a>
                                            <footer class="small"><div style="color: #8c8c8c">${accord_result_email}: ${accord_result_content}...</div></footer>
                                        </div>
                                        <div class="col-sm-2 text-right" style="color: #8c8c73">
                                            <div style="color: #4e4e4e">Post Time:</div>
                                            <div class="small">${accord_result_time}</div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </li>
eof;
                        echo $html_insertRow;
                    }
                    ?>
                </ul>
            </div>
        </div>

        <hr>
        <div class="row" style="">
            <div class="container-fluid" style="">
                <ul class="pagination">
                    <li><a href="#">&nbsp;发帖 <span class="glyphicon glyphicon-triangle-bottom"></span>&nbsp;</a></li>
                </ul>
                <nav aria-label="Page navigation" class="pull-right">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo; 返回</span>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">...</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">下一页 &raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <hr>

    </div>
    <div class="container">
        <form action="./plugins/post_invitation_to_server.php?forum_id=<?php echo "$forum_id"?>" id="replyForm" method="post">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">标题</span>
                <input type="text" class="form-control" placeholder="请输入标题（必填）" aria-describedby="basic-addon1" name="post_title">
            </div>
            <br>
            <textarea name="post_content" id="editor" placeholder="请输入内容" form="replyForm">
            </textarea>
            <script>
                ClassicEditor.create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <br>
            <?php
            if (isset($_SESSION['islogin'])) {
                $input_submit=<<<eof
                <button type="submit" class="btn btn-info btn-block" name="submitform" >
                    <span class="glyphicon glyphicon-subscript"></span> 发帖
                </button>
eof;
                echo $input_submit;
            } else {
                $input_submit=<<<eof
                <button type="submit" class="btn btn-info btn-block" name="submitform" disabled="disabled">
                    <span class="glyphicon glyphicon-subscript"></span> 请先登陆
                </button>
eof;
                echo $input_submit;
            }

            ?>

            <hr>
        </form>
    </div>
    <?php include "../text/footer_block.php";?>
</body>
<script>

</script>
