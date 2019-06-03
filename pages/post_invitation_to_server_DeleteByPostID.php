<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-06-03
 * Time: 18:17
 */
@$post_id_delete=$_GET['post_id_delete'];
@$forum_id_=$_GET['forum_id'];
//echo $post_id_delete;
try{
    $conn=new mysqli('qdm178341200.my3w.com','qdm178341200','Orcabbs666','qdm178341200_db');
}catch(Exception $e){
    echo $e->getMessage();
}
$conn->query("call deleteTzByPostId('$post_id_delete')");
//echo $forum_id_;echo $post_id_delete;
$conn->close();
echo "<script type=\"text/javascript\">setTimeout(\"window.location.href='./forum_demo.php?forum_id=${forum_id_}'\",0);</script>";
?>