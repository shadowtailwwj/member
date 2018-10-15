<?php
header("Content-Type:text/html;charset=UTF-8");
include_once("config.php");
include_once("common.php");
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$pid=1103901;
$where = '=|loginid|'.$username.'|;=|!password|'.$password.'|';
$info = getResult($where,'',$pid,'','','','','');
$cede = $info['RETURN']['CODE'];
if($cede==100){
    $_SESSION["username"]  = $info['RETURN']['MESSAGE'][0]['Title'];
    $_SESSION["sex"]       = $info['RETURN']['MESSAGE'][0]['sex'];
    $_SESSION["uid"]       = $info['RETURN']['MESSAGE'][0]['ID'];
    $_SESSION["loginid"]   = $username;
    echo 1;
}else{
    echo 0;
}

?>