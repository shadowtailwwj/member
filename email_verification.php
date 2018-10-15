<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
include_once("config.php");
include_once("common.php");

$email=isset($_POST["email"])?$_POST["email"]:"";
$code=isset($_POST["code"])?$_POST["code"]:"";
$sub=isset($_POST["sub"])?$_POST["sub"]:"";
$listid = $_SESSION["uid"];
if($sub=="update"){
    $data = time()-$_SESSION["email_date"];
    if($data>300){
        echo 2;
    }else{
        if($code==$_SESSION["email_code"]){
            $pid1=1103002;
            $send = '{"email":"'.$email.'"}';
            $info = getResult('',$send,$pid1,$listid,'','','','');
            $uid = $info['LISTID'];
            if($uid>0){
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo 0;
        }
    }
}elseif ($sub=="sub"){
    if($code==$_SESSION["email_code"]){
        echo 1;
    }else{
        echo 0;
    }
}