<?php
header("Content-Type:text/html;charset=UTF-8");
if(!session_id()) session_start();
?>
<script>
    $(document).ready(function(){
        $("#business").css("display","none");
        $("#solve").css("display","none");
        // $("#serve").css("display","none");
        // $("#user").css("display","none");
    });
</script>
<div class="leftnav">
    <div class="tpuxiang">
        <div class="toux"><img src="images/tx.jpg" alt="" /></div>
        <div class="name"><?php echo $_SESSION["username"] ?></div>
        <div class="mesg">
            <a href="#" class="" >消息 </a>
            |
            <a href="#" class="" >消息 <em>8</em></a>
        </div>
    </div>
    <div class="lnavlist">
        <ul>
            <li id="business">
                <div class="yijicdan">业务中心</div>
                <div class="erjicdn">
                    <a href="#" class="" >账户管理 <em class="fa fa-caret-right"></em></a>
                    <a href="#" class="" >订单管理 <em class="fa fa-caret-right"></em></a>
                    <a href="#" class="" >支付管理 <em class="fa fa-caret-right"></em></a>
                </div>
            </li>
            <li id="solve">
                <div class="yijicdan">解决方案</div>
                <div class="erjicdn">
                    <a href="#" class="" >信息化系统管理 <em class="fa fa-caret-right"></em></a>
                    <a href="#" class="" >站点系统管理   <em class="fa fa-caret-right"></em></a>
                    <a href="#" class="" >授权管理      <em class="fa fa-caret-right"></em></a>
                    <a href="#" class="" >服务器代购管理 <em class="fa fa-caret-right"></em></a>
                </div>
            </li>
            <li id="serve">
                <div class="yijicdan">服务中心</div>
                <div class="erjicdn">
                    <a href="short_domainname.php" class="" >短域名管理  <em class="fa fa-caret-right"></em></a>
                    <a href="prevent_hijack.php" class="" >域名防劫持管理  <em class="fa fa-caret-right"></em></a>
                    <a href="#" class="" >密码服务  <em class="fa fa-caret-right"></em></a>
                    <a href="site.php" class="" >站点统计  <em class="fa fa-caret-right"></em></a>
                    <a href="#" class="" >客户端管理<em class="fa fa-caret-right"></em></a>
                </div>
            </li>
            <li id="user">
                <div class="yijicdan">用户中心</div>
                <div class="erjicdn">
                    <a href="user_edit.php" class="" >资料管理<em class="fa fa-caret-right"></em></a>
                    <a href="pwd.php" class="" >密码管理<em class="fa fa-caret-right"></em></a>
                    <a href="security.php" class="" >安全管理<em class="fa fa-caret-right"></em></a>
                </div>
            </li>

        </ul>
    </div>
</div>