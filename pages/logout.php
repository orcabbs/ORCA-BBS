<?php
header('Content-type:text/html; charset=utf-8');
// 注销后的操作
session_start();
// 清除Session
$username = $_SESSION['user_email'];  //用于后面的提示信息
$_SESSION = array();
session_destroy();

// 清除Cookie
setcookie('user_email', '', time()-99);
setcookie('code', '', time()-99);

header('refresh:0; url=login.php');
?>