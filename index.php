<?php
header("Content-Type:text/html;charset=UTF-8");
include_once("config.php");
include_once("common.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>会员中心</title>
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
  <script type="text/javascript" src="config.js"></script>
</head>
<body>
<?php include_once("menu.php");?>
  <div class="content">
      <?php include_once("header.php");?>
    <div class="contin">
      <div class="contbx">
        <div class="contitme">
          <div class="condwa">
            <div class="conti1">
              <div class="conti1a"><img src="images/tx1.png" alt="" /></div>
              <div class="conti1b">
                
                <div class="conti1b-1"><div class="conti1b-1a">用户名：</div><div class="conti1b-1b"><?php echo $_SESSION["username"] ?></div>  </div>
                <div class="conti1b-1"><div class="conti1b-1a">性   别：</div><div class="conti1b-1b">男               </div>    </div>
              </div>
            </div>
              <div class="conti2">
                  <br/>
                  <div class="conti2a">
                      账户余额： <span class="huang">￥4590</span>
                  </div>
                  <div class="conti2a">
                      信用额度：<span class="huang">￥4590  </span>

                  </div>
                  <div class="conti2a">
                      可用额度：<span class="huang">￥4590</span>
                  </div>
              </div>
            <div class="conti3">
              <div class="conti3in">
                <div class="conti3tl">公 告</div>
                <div class="conti3list">
                  <ul>
                   
                    <li><a href="#" target="_blank" class="" >习近平会见俄罗斯总理                            </a></li>
                    <li><a href="#" target="_blank" class="" >不忘初心 牢记使命 永远奋斗                      </a></li>
                    <li><a href="#" target="_blank" class="" >李克强会见俄罗斯总理 张德江主持人大常委会议    </a></li>
                    <li><a href="#" target="_blank" class="" >全国政协常委会举行全体会议 俞正声出席          </a></li>
                     
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="cl"></div>
        </div>
        
        <div class="contitme">
          <div class="fuiitem">
            <div class="fuiitemin">
              <div class="fuiitemin1">信息化服务</div>
              <div class="fuiitemin2">2</div>
            </div>
          </div>
          <div class="fuiitem">
            <div class="fuiitemin">
              <div class="fuiitemin1">信息化服务</div>
              <div class="fuiitemin2">2</div>
            </div>
          </div>
          <div class="fuiitem">
            <div class="fuiitemin">
              <div class="fuiitemin1">信息化服务</div>
              <div class="fuiitemin2">2</div>
            </div>
          </div>
          <div class="cl"></div>
        </div>
        
        
        <div class="contitme">
          <div class="ddzhoxwa">
            <div class="ddzhox">
              <div class="ddzhox1">
                <div class="ddzhox1a">订单中心</div>
                <div class="ddzhox1b"><a href="#" target="_blank" class="" >更多 <em class="fa fa-angle-double-right"></em></a></div>
              </div>
              <div class="ddzhox3">
                <table class="tabledd">
                  <tr>
                   
                    <td>订单编号  </td>
                    <td>订单说明  </td> 
                    <td>订单状态  </td>
                    <td>订单时间  </td>
   
                  </tr>	

                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  
                </table>
              </div>
            </div>
            
            <div class="ddzhox">
              <div class="ddzhox1">
                <div class="ddzhox1a">服务中心</div>
                <div class="ddzhox1b"><a href="#" target="_blank" class="" >更多 <em class="fa fa-angle-double-right"></em></a></div>
              </div>
              <div class="ddzhox2">
                <div class="conti3list">
                  <ul>
                   
                    <li><a href="#" target="_blank" class="" >习近平会见俄罗斯总理                            <span class="fr">11-01</span></a></li>
                    <li><a href="#" target="_blank" class="" >不忘初心 牢记使命 永远奋斗                      <span class="fr">11-01</span></a></li>
                    <li><a href="#" target="_blank" class="" >李克强会见俄罗斯总理 张德江主持人大常委会议    <span class="fr">11-01</span></a></li>
                    <li><a href="#" target="_blank" class="" >全国政协常委会举行全体会议 俞正声出席          <span class="fr">11-01</span></a></li>
                    <li><a href="#" target="_blank" class="" >理上网来  学习贯彻十九大  汪洋会见斯里兰卡外长 <span class="fr">11-01</span></a></li>
                    <li><a href="#" target="_blank" class="" >理上网来  学习贯彻十九大  汪洋会见斯里兰卡外长 <span class="fr">11-01</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
          <div class="cl"></div>
        </div>
        <div class="cl h10"></div>
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