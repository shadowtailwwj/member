<?php
header("Content-Type:text/html;charset=UTF-8");
include_once("config.php");
include_once("common.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$pid=1103001;
$send = '{"loginid":"'.urlencode($username).'","!password":"'.$password.'","title":"'.urlencode($username).'"}';
$info = getResult('',$send,$pid,'','','','','');
$uid = $info['LISTID'];
if($uid>0){
    $_SESSION["username"]  = $username;
    $_SESSION["uid"]       = $info['LISTID'];
    echo 1;
}else{
    echo 0;
}



?>