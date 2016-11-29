<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0153)./index.htm -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="Generator" content="ECSHOP v2.7.3">
  <meta name="Keywords" content="ECSHOP演示站">
  <meta name="Description" content="ECSHOP演示站">
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
  <title>ECSHOP演示站 - </title>
  <link rel="stylesheet" type="text/css" href="/Public/Home/css/cad60b2521554ca1b0964c708a7df6dd.css" media="all"/>
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/helpcenter.css"/>
  <link rel="shortcut icon" href="./favicon.ico">
  <link rel="icon" href="./animated_favicon.gif" type="image/gif">
  <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css">
  <link rel="alternate" type="application/rss+xml" title="RSS|ECSHOP演示站 - " href="./feed.php">
   <script type="text/javascript">
        window.pageConfig = {
            navId: "home"
        };
    </script>
    <script type="text/javascript" src="/Public/Home/js/jquery-1.6.4.js"></script>
    <script type="text/javascript" src="/Public/Home/js/base.js"></script>
    <script src="/Public/Home/js/jquery.cookie.js"></script>
</head>
<body>
<div class="head-bar clearfix">
<div class="block1">
    <div class="site-bar"><font id="ECS_MEMBERZONE">
     您好，欢迎光临本店！
     <?php if(cookie_check() == 1): ?><a href="#" style="color:#50884b"><?php echo (cookie('username')); ?></a> | 
        <a href="<?php echo U('Home/User/logOut');?>" style="color:#50884b">退出</a>
    <?php else: ?>
        <a href="<?php echo U('Home/User/login');?>" style="color:#50884b">登录</a> | 
        <a href="<?php echo U('Home/User/reg');?>" style="color:#50884b">免费注册</a><?php endif; ?>
    </font></div>
      <ul class="sitelinks">
        <li><a href="./flow.php.htm"></a><a href="<?php echo U('Home/Goods/checkOut');?>" title="查看购物车">购物车有<?php echo (session('calcCnt')); ?>件</a></li>
        <li> <a href="<?php echo U('Home/Goods/checkOut');?>">查看购物车</a> </li>         
        <li style=" margin-top:0px;*margin-top:-2px;">|</li>
        <li> <a href="<?php echo U('Home/Index/index');?>">选购中心</a> </li>
        <li style=" margin-top:0px;*margin-top:-2px;">|</li>
        <li> <a href="<?php echo U('Home/Index/help');?>">帮助中心</a> </li>       
      </ul>
  </div></div>
<div class="page-header clearfix">
  <div class="block1 clearfix" style="position:relative;">
    <div class="logo fl"><a href="./index.php.htm" title=""><img src="/Public/Home/images/logo.gif" width="311" height="55" alt=""></a></div>    
    <div class="btMap">
      <div class="search ">
        <form id="searchForm" name="searchForm" method="get" action="">
          <div class="sideShadow"></div>
          <input type="text" name="keywords" class="keyWord" value="" id="keyword" onclick="javascript:this.value=&#39;&#39;;this.style.color=&#39;#333333&#39;;">
          <input type="submit" class="submit" value="">
        </form> 
      </div>
      <div class="guanjianzi">
        <ul>
          <li>热门搜索：</li>
          <li><a href="">大屏手机</a></li>
          <li><a href="">智能机</a></li>
          <li><a href="">茉莉花茶</a></li>
          <li><a href="">龙井</a></li>
        </ul>
      </div>
      </div>
       <div class="tel">
        <p>400-8899-379</p>
      </div>
    </div>
  </div>
  <div class="globa-nav clearfix" style="position:relative">
<div class="block1">
  <div class="allMenu fl"> <a href="<?php echo U('Home/Index/index');?>" title="" style="font-size:15px;" class="index current">首页</a> 
    <a href="<?php echo U('Home/Cat/cat',array('cat_id'=>3));?>" style="font-size:15px;" title="GSM手机">GSM手机</a> 
    <a href="<?php echo U('Home/Cat/cat',array('cat_id'=>5));?>" style="font-size:15px;" title="双模手机">双模手机</a> 
    <a href="<?php echo U('Home/cat/cat',array('cat_id'=>8));?>" style="font-size:15px;" title="手机配件">手机配件</a> 
    <a href="" style="font-size:15px;" title="团购商品">团购商品</a> 
    <a href="" style="font-size:15px;" title="优惠活动">优惠活动</a> 
  </div>
</div>
</div>
<div class="blank"></div>
<div class="block2">
<div class="blank"></div>
<div class="orderSuccess">
 <div class="order_sn tc"> 感谢您在本店购物！您的订单已提交成功，请记住您的订单号：<font class="a"><?php echo ($ord_sn); ?></font></div>
  <div class="shipping_name">
	 您的应付款金额为： <strong class="f1">￥<?php echo ($money); ?>元</strong>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="立即支付"><br>
	</div>
 	<p>现在，您可以 <a herf="<?php echo U('Home/index/index');?>">返回首页</a> 或去 <a herf="#">用户中心</a></p>
</div>
</div>
<div class="pageFooter">
  <div class="artBox ">
    <div class="artList"> 
      <div class="list">
        <h4>新手上路 </h4>
        <ul>
          <li><a href="" target="_blank" title="售后流程">售后流程</a> </li>
          <li><a href="" target="_blank" title="购物流程">购物流程</a> </li>
          <li><a href="" target="_blank" title="订购方式">订购方式</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>手机常识 </h4>
        <ul>
          <li><a href="" target="_blank" title="如何分辨原装电池">如何分辨原装电池</a> </li>
          <li><a href="" target="_blank" title="如何分辨水货手机 ">如何分辨水货手机</a> </li>
          <li><a href="" target="_blank" title="如何享受全国联保">如何享受全国联保</a> </li>                    
        </ul>
      </div>
      <div class="list">
        <h4>配送与支付 </h4>
        <ul>
          <li><a href="" target="_blank" title="货到付款区域">货到付款区域</a> </li>
          <li><a href="" target="_blank" title="配送支付智能查询 ">配送支付智能查询</a> </li>
          <li><a href="" target="_blank" title="支付方式说明">支付方式说明</a> </li>                   
        </ul>
      </div>
      <div class="list">
        <h4>会员中心</h4>
        <ul>
          <li><a href="" target="_blank" title="资金管理">资金管理</a> </li>
          <li><a href="" target="_blank" title="我的收藏">我的收藏</a> </li>
          <li><a href="" target="_blank" title="我的订单">我的订单</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>服务保证 </h4>
        <ul>
          <li><a href="" target="_blank" title="退换货原则">退换货原则</a> </li>
          <li><a href="" target="_blank" title="售后服务保证 ">售后服务保证</a> </li>
          <li><a href="" target="_blank" title="产品质量保证 ">产品质量保证</a> </li>
        </ul>
      </div>
      <div class="list">
        <h4>联系我们 </h4>
        <ul>
          <li><a href="" target="_blank" title="网站故障报告">网站故障报告</a> </li>
          <li><a href="" target="_blank" title="选机咨询 ">选机咨询</a> </li>
          <li><a href="" target="_blank" title="投诉与建议 ">投诉与建议</a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="block tc" style=""> <img src="/Public/Home/images/serviceImg1.jpg"> </div>
<div class="block tc" style="margin-bottom:20px;"> 
  <a href="">免责条款</a>| 
  <a href="">隐私保护</a>| 
  <a href="">咨询热点</a>| 
  <a href="">联系我们</a>| 
  <a href="">公司简介</a>| 
  <a href="">批发方案</a>| 
  <a href="">配送方式</a> 
<br>
<br>  
   <a href="" style="display:none;">68ECSHOP模版中心</a>  
<br>   
  共执行 5 个查询，用时 0.021133 秒，在线 17 人，Gzip 已禁用，占用内存 3.415 MB<img src="./api/cron.php-t=1452023217" alt="" style="width:0px;height:0px;"><br>
</div>
</body></html>