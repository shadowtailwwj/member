<?php
//API设置
define('IP', getIp());
define('TOKEN', 'Token');//密钥信息，对YSID以及时间轴进行加密
define('APIID', 2);//条件ID号，唯一固定号
define('YSID', 20170505011);//系统编号，唯一编号
define('CLIENTID', 1);//访问会员用户Id
define('SOURCEID', 6);//交易来源渠道
define('TYPEID', 1);//请求类型：0为初始化请求1为数据请求
define('EIPID', 1);//EIP系统用户Id
define('CODE', 0);//响应代码，100-199为正常
define('APIURL', 'http://home.yushidns.com:8088/CNet/Api.ashx');//API地址

//邮箱设置
define('MAIL_HOST','smtp.163.com');//smtp服务器的名称
define('MAIL_SMTPAUTH',TRUE);//启用smtp认证
define('MAIL_USERNAME','shadowtailwwj@163.com');//发件人的邮箱名
define('MAIL_PASSWORD','shouquanma123');//邮箱发件人授权密码
define('MAIL_FROM','shadowtailwwj@163.com');//发件人邮箱地址
define('MAIL_FROMNAME','雨石科技');//发件人姓名
define('MAIL_CHARSET','utf-8');//设置邮件编码
define('MAIL_ISHTML',TRUE);// 是否HTML格式邮件

//session_start();
//
//if($_SESSION['uid']<=0){
//    header("location:login.html");exit();
//}

function getIp(){
    $ip=false;

    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
        for ($i = 0; $i < count($ips); $i++) {
            if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}
?>