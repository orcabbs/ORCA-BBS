<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 2019-03-17
 * Time: 00:45
 */
header("Content-Type: text/html;charset=utf-8");
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
$head_imp=<<<eof
    <meta charset="utf-8">
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    
    <!--bootstrap+jquery-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/docs.min.css">

    <!--CKEditor5 -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
    <style>body { padding-top: 70px; }</style>
    <link rel="stylesheet" href="../css/myConfig.css">
<!--控制ckeditor高度--><style>.ck-content {min-height: 200px;}</style>
eof;
echo $head_imp;
?>
