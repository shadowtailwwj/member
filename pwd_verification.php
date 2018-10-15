<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
include_once("config.php");
include_once("common.php");

$pwd_old=isset($_POST["pwd_old"])?$_POST["pwd_old"]:"";
$sub=isset($_POST["sub"])?$_POST["sub"]:"";
$listid = $_SESSION["uid"];
if($sub=="yz"){
    $pid=1103901;
    $where = '=|loginid|'.$_SESSION["loginid"].'|;=|!password|'.$pwd_old.'|';
    $info = getResult($where,'',$pid,'','','','','');
    $cede = $info['RETURN']['CODE'];
    if($cede==100){
        echo 1;
    }else{
        echo 0;
    }
}