<?php
error_reporting(0);
function characet($data){
    if( !empty($data) ){
        $fileType = mb_detect_encoding($data , array('UTF-8','GBK','LATIN1','BIG5')) ;
        if( $fileType != 'UTF-8'){
            $data = mb_convert_encoding($data ,'utf-8' , $fileType);
        }
    }
    return $data;
}
function change_utf8($str) {
    return mb_convert_encoding($str, 'utf-8', 'gbk');
}
function change_gbk($str) {
    return mb_convert_encoding($str, 'gbk', 'utf-8');
}
@$post_id__=$_GET['post_id'];

try{
    $conn=new mysqli('qdm178341200.my3w.com','qdm178341200','Orcabbs666','qdm178341200_db');
}catch(Exception $e){
    echo $e->getMessage();
}
@$title=change_gbk($_POST['post_title']);
@$content=change_gbk($_POST['post_content']);
//echo $title.' '.$content.' !! '.$forum_id;
session_start();
// 首先判断Cookie是否有记住了用户信息
if (isset($_COOKIE['user_email'])) {
    # 若记住了用户信息,则直接传给Session
    $_SESSION['user_email'] = $_COOKIE['user_email'];
    $_SESSION['islogin'] = 1;
}
if (isset($_SESSION['islogin'])) {
    // 若已经登录
    $user_email_tmp = $_SESSION['user_email'];
    $result_tmp = $conn->query("select * from bbs_account where bbs_account.user_email='$user_email_tmp'");
    $row_tmp = $result_tmp->fetch_array();
    $user_name_tmp = characet($row_tmp['user_name']);
    $conn->query("insert into bbs_content(post_id,floor_user_email,floor_content) values ('$post_id__','$user_email_tmp','$content')");
    $conn->close();
    echo "<script type=\"text/javascript\">setTimeout(\"window.location.href='./check_floor.php?post_id_=${post_id__}'\",0);</script>";
}
?>