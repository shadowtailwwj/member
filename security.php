<?php
header("Content-Type:text/html;charset=UTF-8");

session_start();
include_once("config.php");
include_once("common.php");

$pid=1103003;
$listid = $_SESSION["uid"];
$skeys = 'No,title,mobile,email,user_id';
$info = getResult('','',$pid,$listid,$skeys,'','','');
$mobile = $info['RETURN']['MESSAGE'][0]['mobile'];
$email  = $info['RETURN']['MESSAGE'][0]['email'];

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>安全管理</title>
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
</head>
<body>
<?php include_once("menu.php");?>
<div class="content">
    <?php include_once("header.php");?>
    <div class="contin">
        <div class="contbx">
            <div class="editwa">
                <div class="xiugatl">安全中心</div>
                <div class="listbansk">
                    <ul>
                        <li>
                            <div class="cb">
                                <div class="leftfind leftfind_1">
                                    <div class="mimasj">
                                        <div>
                                            <h3>密保手机</h3>
                                            <?php if(!empty($mobile)){ ?>
                                            <p>已设置<?php echo substr_replace($mobile,'****',3,4) ?></p>
                                            <?php }else{ ?>
                                            <p>未绑定</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="changebx changebx_1" href="###">
                                <?php if(!empty($mobile)){ ?>
                                    更换
                                <?php }else{ ?>
                                    去绑定
                                <?php } ?>
                            </a>
                        </li>
                        <li>
                            <div class="cb">
                                <div class="leftfind leftfind_2">
                                    <div class="mimasj">
                                        <div>
                                            <h3>密保邮箱</h3>
                                            <?php if(!empty($email)){ ?>
                                                <p>已设置<?php echo $email ?></p>
                                            <?php }else{ ?>
                                                <p>未绑定</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <a class="changebx changebx_1" href="email.php">
                                    <?php if(!empty($email)){ ?>
                                        更换
                                    <?php }else{ ?>
                                        去绑定
                                    <?php } ?>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="cb">
                                <div class="leftfind leftfind_3">
                                    <div class="mimasj">
                                        <div>
                                            <h3>密保问题</h3>
                                            <p>已设置</p>
                                            <p><span class="color_2">提示：密保问题属于静态密码，存在已知安全风险，建议删除</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="changebx changebx_2" href="###">删除</a>
                        </li>
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