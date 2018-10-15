<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
include_once("config.php");
include_once("common.php");


$ldomain=isset($_POST["ldomain"])?$_POST["ldomain"]:"";
$sdomain="";
$title=isset($_POST["title"])?$_POST["title"]:"";
$time=isset($_POST["time"])?$_POST["time"]:"";
$etime="";
$stime="";
$sub=isset($_POST["sub"])?$_POST["sub"]:"";
if($sub=="action"){
    $pid=2001016;
    $send = '{"Title":"'.$title.'","Sdomain":"'.$sdomain.'","Ldomain":"'.$ldomain.'","STime":"'.$stime.'","Etime":"'.$etime.'","CRM_ID":"'.$_SESSION["uid"].'"}';
    $info = getResult('',$send,$pid,'','','','','');
    $uid = $info['LISTID'];
    if($uid>0){
        echo 1;
    }else{
        echo 0;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>站点管理</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link href="images/ico.ico" rel="shortcut icon">

    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" rev="stylesheet" href="style/reset.css" type="text/css" />
    <link rel="stylesheet" rev="stylesheet" href="style/global.css" type="text/css" />
    <link rel="stylesheet" rev="stylesheet" href="style/index.css" type="text/css" />

    <script src="https://cdn.bootcss.com/jquery/1.11.1/jquery.js"></script>
    <script type="text/javascript" src="script/demo.js"></script>
    <script type="text/javascript" src="script/index.js"></script>
    <script type="text/javascript" src="script/jquery.js"></script>
</head>
<body>
<?php include_once("menu.php");?>
<div class="content">
    <?php include_once("header.php");?>
    <div class="contin">
        <div class="contbx">
            <div class="editwa">
                <div class="xiugatl">添加信息</div>
                <div class="xiutnr">
                    <ul class="editul">

                        <li>
                            <div class="editzuo">名   称： </div>
                            <div class="edityou"><input type="text" class="editipt" value="" name="title"/></div>
                        </li>
                        <li>
                            <div class="editzuo">长域名地址： </div>
                            <div class="edityou"><input type="text" class="editipt" value="" name="ldomain" /></div>
                        </li>
                        <li>
                            <div class="editzuo">申请时长：</div>
                            <div class="edityou">
                                <select name="time" class="editipt">
                                    <option value="1">1个月</option>
                                    <option value="2">2个月</option>
                                    <option value="3">3个月</option>
                                    <option value="6">6个月</option>
                                    <option value="12">12个月</option>
                                </select>
                            </div>
                        </li>
                        <li>
                            <div class="editzuo">&nbsp;</div><div class="edityou">
                                <input type="hidden" name="sub" value="action">
                                <a href="javascript:void(0)" class="tijoaobtn" >提  交</a>
                            </div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!--[if lt IE 11]>
<div class="eachlisq"><div class="" style="display:table;width:100%;height:100%"><div class="" style="display:table-cell;vertical-align:middle"><div class="dwnntl1">温馨提示：<strong class="sainsnb">您的浏览器需要更新才能访问哦 ^_^</strong></div><div class="dqiangshiy">请使用 <strong class="sainsnb">Chrome</strong>、 <strong class="sainsnb">firefox</strong>、 <strong class="sainsnb">Safari</strong>、 <strong class="sainsnb">opera</strong> 、 <strong class="sainsnb">Microsoft Edge</strong>、 <strong class="sainsnb">Internet Explorer 11</strong> 浏览器访问~</div><p class="dsannp"><a class="sannbw1" href="http://www.google.com/chrome" target="_blank"></a> <a class="sannbw2" href="http://www.apple.com/safari" target="_blank"></a> <a class="sannbw3" href="http://www.firefox.com/" target="_blank"></a> <a class="sannbw4" href="http://www.opera.com/zh-cn" target="_blank"></a> <a class="sannbw5" href="https://www.microsoft.com/en-us/windows/microsoft-edge" target="_blank"></a> <a class="sannbw6" href="https://support.microsoft.com/en-us/help/17621/internet-explorer-downloads" target="_blank"></a></p><h4 class="dwnsnht">Please update to a modern browser</h4></div></div></div>
<style type="text/css">
    .eachlisq{position:fixed;left:0;top:0;width:100%;height:100%;z-index:9999;background:#fff;text-align:center;color:#666}.sainsnb{border-bottom:1px dotted #930;font-weight:400;padding-bottom:2px;color:#930}.dwnntl1{font-size:23px;font-weight:700;line-height:50px}.dqiangshiy{font-size:18px;line-height:40px;font-weight:700}.dsannp{padding:40px 0;text-align:center}.dsannp a{display:block;width:125px;height:135px;margin:0 10px;display:inline-block;background:url(images/lqx.png) no-repeat}.dsannp a.sannbw1{background-position:0 0}.dsannp a.sannbw2{background-position:-125px 0}.dsannp a.sannbw3{background-position:-250px 0}.dsannp a.sannbw4{background-position:-375px 0}.dsannp a.sannbw5{background-position:-500px 0}.dsannp a.sannbw6{background-position:-625px 0}.dwnsnht{margin:20px 0;color:#888}
</style>
<![endif]-->
</html>
<script>
    $(".tijoaobtn").click(function(){
        var ldomain = $("input[name='ldomain']").val();
        var title = $("input[name='title']").val();
        var time = $("input[name='time']").val();
        var sub = $("input[name='sub']").val();
        var url = "short_domainname_apply.php";
        var data = {ldomain:ldomain,title:title,time:time,sub:sub};
        $.post(url,data,function(data){
            if(data==1){
                self.location='short_domainname.php';
            }else{
                alert("申请错误");
            }
        })
    })
</script>