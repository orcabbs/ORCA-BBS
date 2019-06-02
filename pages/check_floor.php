<?php
@$post_id_=$_GET['post_id_'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head_import.php";?>
    <title>查看帖子</title>

</head>
<body background="../src/pic/memphis-colorful.png">
    <?php include "navigator.php"?>
    <?

    ?>
    <div class="container">
        <hr>

        <div class="row">
            <div class="container-fluid">
                <div class="col-xs-12" style="background-color: #64a461;border-radius: 4px">
                    <marquee><span class="serif" style="font-weight: bolder;font-size: 20px;color: white;"><span style="color: #e6eed8"><i class="fa fa-cog fa-spin"></i> Administrator: </span>Welcome to ORCA bbs, have fun and share your happiness.</span></marquee>
                </div>
            </div>
        </div>
        <br>
        <ul class="list-group">
            <li class="list-group-item bg-primary" style="background-color: #2e6da4">帖子号:<?php echo $post_id_;?><span class="glyphicon glyphicon-triangle-bottom"></span></li>
        <?php
        $reply_list=$mysqli->query("select * from bbs_content where post_id='$post_id_' order by post_time desc");
        for($rows=1;$rows<=$reply_list->num_rows;$rows++) {
            $row_result = $reply_list->fetch_array();
            $row_floor_content = characet($row_result['floor_content']);
            $row_user_email = characet($row_result['floor_user_email']);
            $row_post_time=characet($row_result['post_time']);
            try {
                $con = new mysqli('qdm178341200.my3w.com', 'qdm178341200', 'Orcabbs666', 'qdm178341200_db');
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            $floor_html= <<<eof
            <li class="list-group-item ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 hidden-sm hidden-xs" style="background: rgba(0,0,0,0.08)">
                            <img src="../src/pic/head.jpeg" alt="" class="img-thumbnail" style="border: rgba(59,184,146,0.52) 2px solid;height: 100px;">
                            
                            <div><a href="">${row_user_email}</a></div>
                        </div>
                        <div class="col-md-8">
                            <div>${row_floor_content}</div>
                        </div>
                        <div class="col-md-2 text-right" style="color: #ffffff;background-color: #818386;border-radius: 4px;">
                            <div style="color: #ffffff"><nobr><i class="fa fa-pencil fa-fw"></i>POST TIME:</nobr></div>
                            <div class="small"><nobr>${row_post_time}</nobr></div>
                        </div>
                      
                    </div>
                </div>
            </li>
eof;
            $con->close();
            echo $floor_html;
            //echo "<hr>";
        }
        ?>
        </ul>

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



</body>