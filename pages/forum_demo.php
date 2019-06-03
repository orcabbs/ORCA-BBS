<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-03-21
 * Time: 11:58
 */
@$forum_id=$_GET['forum_id'];
//@$forum_id=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>ORCA</title>
    <style>.serif{font-family: italic bold  Georgia, serif;}</style>
</head>

<body background="../src/pic/memphis-colorful.png">
    <?php include "navigator.php"?>
    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators" >
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox" style="border-radius: 10px">
                <div class="item active">
                    <img src="https://s2.ax1x.com/2019/03/28/AdRTPg.jpg" alt="...">
                    <div class="carousel-caption">
                        VIOLET EVERGARDEN
                    </div>
                </div>
                <div class="item">
                    <img src="https://s2.ax1x.com/2019/03/28/AdROrq.jpg" alt="...">
                    <div class="carousel-caption">
                        VIOLET EVERGARDEN
                    </div>
                </div>
                <div class="item">
                    <img src="https://s2.ax1x.com/2019/03/28/AdRXq0.jpg" alt="...">
                    <div class="carousel-caption">
                        VIOLET EVERGARDEN
                    </div>
                </div>
            </div>

            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="border-radius: 10px">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="border-radius: 10px">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>

        <div class="row">
            <div class="container-fluid">
                <div class="col-xs-12" style="background-color: #64a461;border-radius: 4px">
                    <marquee><span class="serif" style="font-weight: bolder;font-size: 20px;color: white;"><span style="color: #e6eed8"><i class="fa fa-cog fa-spin"></i> Administrator: </span>Welcome to ORCA bbs, have fun and share your happiness.</span></marquee>
                </div>
            </div>
        </div>
        <br>
        <div class="row" style="">
            <div class="col-md-2 hidden-sm hidden-xs column">
                <div style="border-radius: 4px;margin-top: 2px;margin-bottom: -15px" class="text-center bg-primary">个人信息</div>
                <br>
                <?php include "profile_frame.php"?>

            </div>
            <div class="col-md-10 column">
                <ul class="list-group">
                    <li class="list-group-item bg-primary" style="background-color: #2e6da4">全部主题 <span class="glyphicon glyphicon-triangle-bottom"></span></li>
                    <?php
                    $result_list=$mysqli->query("select * from bbs_list where forum_id='$forum_id' order by post_time desc");
//                                            echo $result_list->num_rows;
                    $user_email_tmp=null;
                    if (isset($_COOKIE['user_email'])) {
                        $_SESSION['user_email'] = $_COOKIE['user_email'];
                        $_SESSION['islogin'] = 1;
                    }
                    if (isset($_SESSION['islogin'])) {
                        $user_email_tmp = $_SESSION['user_email'];
                        $result_tmp = $mysqli->query("select * from bbs_account where bbs_account.user_email='$user_email_tmp'");
                        $row_tmp = $result_tmp->fetch_array();
                        $user_name_tmp = $row_tmp['user_name'];
                    }
                    for($rows=1;$rows<=$result_list->num_rows;$rows++){
                        $row_result=$result_list->fetch_array();
                        $row_result_title=characet($row_result['title']);
//                        $rr=$row_result["title"];
                        $row_result_postID=characet($row_result['post_id']);
                        $row_result_builder=characet($row_result['builder_email']);
                        $disabled="disabled=\"disabled\"";
                        if($row_result_builder==$user_email_tmp){
                            $disabled="";
                        }
                        try{
                            $con=new mysqli('qdm178341200.my3w.com','qdm178341200','Orcabbs666','qdm178341200_db');
                        }catch(Exception $e){
                            echo $e->getMessage();
                        }
                        $accord_list=$con->query("call selectById('$row_result_postID')");
                        $accord_row=$accord_list->fetch_array();
                        $accord_result_content=mb_substr(strip_tags(characet($accord_row['floor_content'])),0,30);
                        $accord_result_time=characet($accord_row['post_time']);
                        $accord_result_email=characet($accord_row['floor_user_email']);
                        $random_number=rand(1,10000);

                        $con->close();

                        $html_insertRow_odd= <<<eof
                            <li class="list-group-item ">
                                <div class="container-fluid">
                                    <div class="row">
                                        
                                        <div class="col-lg-1 hidden-md hidden-sm hidden-xs">
                                            <img src="../src/pic/head.jpeg" alt="" class="img-thumbnail" style="border: rgba(59,184,146,0.52) 2px solid;">
                                        </div>
                                        <div class="col-xs-9">
                                            <a href="./check_floor.php?post_id_=${row_result_postID}" style="font-size: medium;"><p>${row_result_title}</p></a>
                                            <footer class="small"><div style="color: #8c8c8c">${accord_result_email}: ${accord_result_content}...</div></footer>
                                        </div>
                                        <div class="col-lg-2 col-xs-3 text-right" style="color: #ffffff;background-color: #818386;border-radius: 4px;">
                                            <div style="color: #ffffff"><nobr><i class="fa fa-pencil fa-fw"></i>POST TIME:</nobr></div>
                                            <div class="small"><nobr>${accord_result_time}</nobr></div>
                                            <a href="./post_invitation_to_server_DeleteByPostID.php?post_id_delete=${row_result_postID}&forum_id=${forum_id}"><button type="submit" class="btn btn-danger btn-block" name="delete" style="background-color: #afafaf;border-color: #808386;" ${disabled}>
                                                <span class="glyphicon glyphicon-edit"></span> 删除
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
eof;
                        $html_insertRow_even= <<<eof
                        <li class="list-group-item " style="background-color: rgb(238,238,238)">
                                <div class="container-fluid">
                                    <div class="row">
                                        
                                        <div class="col-lg-1 hidden-md hidden-sm hidden-xs">
                                            <img src="../src/pic/head.jpeg" alt="" class="img-thumbnail" style="border: rgba(59,184,146,0.52) 2px solid;">
                                        </div>
                                        <div class="col-xs-9">
                                            <a href="./check_floor.php?post_id_=${row_result_postID}" style="font-size: medium;"><p>${row_result_title}</p></a>
                                            <footer class="small"><div style="color: #8c8c8c">${accord_result_email}: ${accord_result_content}...</div></footer>
                                        </div>
                                        <div class="col-lg-2 col-xs-3 text-right" style="color: #ffffff;background-color: #818386;border-radius: 4px;">
                                            <div style="color: #ffffff"><nobr><i class="fa fa-pencil fa-fw"></i>POST TIME:</nobr></div>
                                            <div class="small"><nobr>${accord_result_time}</nobr></div>
                                            <a href="./post_invitation_to_server_DeleteByPostID.php?post_id_delete=${row_result_postID}&forum_id=${forum_id}"><button type="submit" class="btn btn-danger btn-block" name="delete" style="background-color: #afafaf;border-color: #808386;" ${disabled}>
                                                <span class="glyphicon glyphicon-edit"></span> 删除
                                            </button></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
eof;
                        if($rows%2==1){
                            echo $html_insertRow_odd;
                        }else{
                            echo $html_insertRow_even;
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="col-xs-12">
                    <div class="col-xs-4"><button type="button" class="btn btn-primary btn-block">前一页</button></div>
                    <div class="col-xs-4"><button type="button" class="btn btn-default active btn-block">当前：<span di="instant_page">1</span></button></div>
                    <div class="col-xs-4"><button type="button" class="btn btn-primary btn-block">后一页</button></div>
                </div>
            </div>
        </div>
        <hr>

    </div>
    <div class="container">
        <form action="post_invitation_to_server.php?forum_id=<?php echo $forum_id?>" id="replyForm" method="post">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">发帖嗷！</span>
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
