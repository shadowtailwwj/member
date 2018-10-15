<?php
header("Content-Type:text/html;charset=UTF-8");

session_start();
include_once("config.php");
include_once("common.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>邮箱设置</title>
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
                <div class="xiugatl">绑定邮箱</div>
                <div class="xiutnr">
                    <ul class="editul">

                        <li><div class="editzuo">邮箱地址： </div><div class="edityou"><input type="text" name="email" class="editipt" value="" /></div><input type="hidden" name="sub1" value="code"> <a href="javascript:void(0)" class="yzbtn" >发送验证码</a></li>
                        <li><div class="editzuo">验证码：</div><div class="edityou"><input type="text" name="code" class="editipt" value="" /></div></li>

                        <li><div class="editzuo">&nbsp;</div><div class="edityou">
                                <input type="hidden" name="sub" value="update">
                                <a href="javascript:void(0)" class="tijoaobtn" >提  交</a>
                                <a href="#" class="tijoaobtn cur" >重  置</a>
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
    $(".yzbtn").click(function(){
        var email = $("input[name='email']").val();
        var sub = $("input[name='sub1']").val();
        var url = "email_code.php";
        var data = {email:email,sub:sub};
        $.post(url,data,function(data){
//            alert(data);return false;
            if(data==1){
                alert("验证码已发送，请在5分钟之内使用");
            }else{
                alert("修改错误");
            }
        })
    })

    $(".tijoaobtn").click(function(){
        var email = $("input[name='email']").val();
        var code = $("input[name='code']").val();
        var sub = $("input[name='sub']").val();
        var url = "email_verification.php";
        var data = {email:email,code:code,sub:sub};
        $.post(url,data,function(data){
//            alert(data);return false;
            if(data==1){
                alert("绑定成功！");self.location='security.php';
            }else if(data==2){
                alert("验证码已过期");
            }else if(data==0){
                alert("验证码错误");
            }
        })
    })
</script>