<?php
header("Content-Type:text/html;charset=UTF-8");
session_start();
include_once("config.php");
include_once("common.php");
$pid=2001007;
$where = '=|CRM_ID|1|';
$skeys = 'ID,No,Title,Sdomain,Ldomain,Counts,State,STime,Etime,CRM_ID';
$info = getResult($where,'',$pid,'',$skeys,'','','');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>短域名管理</title>
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
                <div class="ddtals">短域名列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="short_domainname_apply.php" class="xufei1" >申请短域名</a></div>
                <div class="ddsearc">
                    <select class="ddinpt">
                        <option>全部时间</option>
                    </select>
                    <select class="ddinpt">
                        <option>全部地域/节点</option>
                    </select>
                    <select class="ddinpt">
                        <option>实例ID</option>
                    </select>
                    <input type="text" class="ddinpt ddinpt2" placeholder="请输入实例ID进行精准查询" value="" />
                    <a href="#" class="soubtn" >搜索</a>
                </div>
                <div class="ddtaner">
                    <table class="ddastbls">
                        <tr>
                            <td><input type="checkbox" value="" /></td>
                            <td>编  号 </td>
                            <td>域名名称 </td>
                            <td>短域名信息</td>
                            <td>长域名 </td>
                            <td>总访问次数 </td>
                            <td>开始时间 </td>
                            <td>结束时间 </td>
                            <td>状  态</td>
                            <td>操　作　</td>	　　　　　　　　　　　　　　　　　　　　　　　　　　　
                        </tr>
                        <?php foreach ($info['RETURN']['MESSAGE'] as $key=>$val){ ?>
                        <tr>
                            <td><input type="checkbox" value="" /></td>
                            <td><?php echo $val['no'] ?></td>
                            <td><?php echo $val['title'] ?></td>
                            <td><?php echo $val['sdomain'] ?></td>
                            <td><?php echo $val['ldomain'] ?></td>
                            <td><?php echo $val['counts'] ?></td>
                            <td><?php echo $val['stime'] ?></td>
                            <td><?php echo $val['etime'] ?></td>
                            <?php if($val['state']==1){?>
                                <td><a href="#" class="xufei2" >开启</a></td>
                            <?php }else{ ?>
                                <td><a href="#" class="xufei1" >未开启</a></td>
                            <?php } ?>
                            <td><a href="short_domainname_edit.php?id=<?php echo $val['id'] ?>" class="xufei1" >修改</a> | <a href="#" class="xufei1">删除</a></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td><input type="checkbox" value="" /></td>
                            <td colspan="10">
                                <div class="pidaoc">
                                    <div class="pidaoc1">
                                        <a href="#" class="cozobtn" >批量续费</a>
                                        <a href="#" class="cozobtn" >开通自动续费</a>
                                        <a href="#" class="cozobtn" >修改自动续费</a>
                                        <a href="#" class="cozobtn" >导出续费清单</a>
                                    </div>
                                    <div class="pidaoc2">
                                        共11条，
                                        每页显示：11条
                                        <div class="pagegrop">
                                            <a href="#" class="" ><em class="fa fa-angle-double-left"></em></a>
                                            <a href="#" class="" ><em class="fa fa-angle-left"></em></a>
                                            <a href="#" class="cur" >1</a>
                                            <a href="#" class="" >2</a>
                                            <a href="#" class="" ><em class="fa fa-angle-right"></em></a>
                                            <a href="#" class="" ><em class="fa fa-angle-double-right"></em></a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </table>
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