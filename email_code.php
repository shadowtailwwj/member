<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
include_once("config.php");
include_once("common.php");

$email=isset($_POST["email"])?$_POST["email"]:"";
$sub=isset($_POST["sub"])?$_POST["sub"]:"";
if($sub=="code"){
    $title = "邮箱验证";    //邮件标题
    $font = "此邮件为绑定邮箱验证邮件，请勿回复，您的验证码为"; //邮件内容
    $code = rand(1000,9999);    //随机码
    $content = $font.$code; //拼接
    if(SendMail($email,$title,$content)) {
        //存验证码
        $_SESSION["email_code"] = $code;
        $_SESSION["email_date"] = time();
        echo 1;
    }else{
        echo 0;
    }
}