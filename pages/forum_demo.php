<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-03-21
 * Time: 11:58
 */
//@$forum_id=$_GET[''];
@$forum_id=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>ORCA 首页</title>

</head>

<div class="body">
    <?php include "navigator.php"?>
    <div class="container">
        <div class="row" style="">
            <div class="col-md-3 column">
                <div class="thumbnail">
                    <img src="../src/pic/head.jpeg" alt="..." class="img-circle">
                    <div class="caption">
                        <h3>个人信息</h3>
                        <p>...</p>
                        <p>
                            <a href="#" class="btn btn-primary" role="button">登陆</a>
                            <a href="#" class="btn btn-default" role="button">注册</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-9 column">
                <ul class="list-group">
                    <li class="list-group-item bg-primary" style="background-color: #2e6da4">帖子</li>
                    <?php
                    $result_list=$mysqli->query("select * from bbs_list where forum_id='$forum_id'");
//                                            echo $result_list->num_rows;
                    for($rows=1;$rows<=$result_list->num_rows;$rows++){
                        $row_result=$result_list->fetch_array();
                        $row_result_tmp=characet($row_result["title"]);
//                        $rr=$row_result["title"];
                        $html_insertRow=<<<eof
                            <li class="list-group-item "style="height: 100px">
                                <div>
                                    <a href="#">${row_result_tmp}</a>
                                </div>
                            </li>
eof;
                        echo $html_insertRow;
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>



