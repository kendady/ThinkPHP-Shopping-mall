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
<div class="block2 clearfix">
<div class="ur_here blank">
当前位置: <a href="">首页</a> 
<code>&gt;</code> 
<?php if(is_array($gnav)): foreach($gnav as $key=>$gnav): ?><a href=""><?php echo ($gnav['cat_name']); ?></a> 
<code>&gt;</code><?php endforeach; endif; ?>
 <?php echo ($goods_info['goods_name']); ?></div> 
 <div class="clearfix">
	  <div class="goodsimgbox fl">
		<div id="focuscont">
     <a style="border: 1px solid rgb(210, 208, 208); width: 400px; height: 400px; display: block; padding: 0px; position: relative; outline: 0px; text-decoration: none;" href="<?php echo ($goods_info['goods_img']); ?>" id="zoom1" class="MagicZoom MagicThumb" title="ECSHOP模板中心68ecshop.com测试商品">
        <img src="<?php echo ($goods_info['goods_img']); ?>" alt="ECSHOP模板中心68ecshop.com测试商品" width="400" height="400" style="margin:0;" id="sim974895">
     <div id="bc974895" class="MagicZoomBigImageCont" style="width: 310px; height: 310px; overflow: hidden; z-index: 100; visibility: hidden; position: absolute; top: -10000px; left: 415px;"><div class="MagicZoomHeader" id="MagicZoomHeaderbc974895" style="position: relative; z-index: 10; left: 0px; top: 0px; padding: 3px;">ECSHOP模板中心68ecshop.com测试商品</div><div style="overflow: hidden;"><img src="/Public/Home/images/32_G_1370338389558.jpg" style="position: relative; border-width: 0px; padding: 0px; left: 0px; top: 0px;"></div><div style="color: rgb(255, 0, 0); font-size: 10px; font-weight: bold; font-family: Tahoma; position: absolute; width: 100%; text-align: center; left: 0px; top: 290px;"></div></div><div class="MagicZoomPup" style="z-index: 10; visibility: hidden; position: absolute; opacity: 0.05; width: 98px; height: 98px;"></div></a>         		 
	   </div>
    <div class="picture" id="imglist">		       
    </div>  
		</div>
		<div class="goodstxtbox fr" style="width:550px; overflow:hidden">
		<h4 class="goodName">
		 <?php echo ($goods_info['goods_name']); ?><div class="prev">
        <a href="" style="color:#CCC; font-size:12px;">下一个</a>
        </div>
		 </h4>
		 <form class="goodsform" action="" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY">
			<p class="goodsInfo">
            <span>商品货号：<?php echo ($goods_info['goods_sn']); ?></span>
            <span>商品库存： <?php echo ($goods_info['goods_number']); ?> 台</span>
            <span>商品品牌：<a href=""><u><?php echo ($goods_info['goods_name']); ?></u></a></span>
            <span>商品重量：<?php echo ($goods_info['goods_weight']); ?>克</span>
            <span>上架时间：<?php echo ($goods_info['add_time']); ?></span>
            <span>商品点击数：<?php echo ($goods_info['click_count']); ?></span>
            <span>用户评价： <img src="/Public/Home/images/stars5.gif" alt="comment rank 5">
            </span>
			</p>
			<div class="Goodpromotion" style="float:left; width:550px; border-left:none; border-right:none;">
			<font style="font-size:12px;">本店售价：</font><font class="price" id="ECS_SHOPPRICE" style="font-size:20px;">￥<?php echo ($goods_info['shop_price']); ?>元</font><br>
            <font class="goodspice" style="color:#CCC">市场价格：<span class="market">￥<?php echo ($goods_info['market_price']); ?>元</span></font><br>
			<div class="blank"></div>
			<a href="<?php echo U('Home/Goods/checkOut',array('goods_id'=>$goods_info['goods_id']));?>"><img src="/Public/Home/images/bnt_buy.gif"></a> 
            </div>
		</form>
		</div>
	</div>
	<div class="infotit clearfix" id="com_b">
	    <h2 style="cursor: pointer;">商品描述</h2>
	</div>
	 <div class="tagcontent" id="com_v">
       
       
        <?php echo ($goods_info['goods_desc']); ?>
       </div>           
	 <div id="ECS_COMMENT"> <div class="clearfix" style="border:1px solid #C9DCEF; border-top:2px solid #509d0e">
<h2 style=" margin:10px 0px 0px 20px; font-size:14px; color:#333333">用户评论</h2>
 <?php if($comment == null): ?><div class="tips">暂时还没有任何用户评论</div>
 <?php else: ?>
 <?php if(is_array($comment)): foreach($comment as $key=>$comment): ?><table>
        <tr>
            <td><h2 style=" margin:10px 0px 0px 20px; font-size:12px; color:#333333"><?php echo ($comment['user_id']); ?></h2></td>
            <td><?php echo ($comment['content']); ?></td>
        </tr>
    </table><?php endforeach; endif; endif; ?>
<div class="Goodpromotion blank">
      <form action="<?php echo U('Home/Goods/addComment');?>" method="post" name="commentForm" id="commentForm">
       <table border="0" cellspacing="5" cellpadding="0">
        <tbody>
     <tr>
       <!-- <td align="right">用户名：</td> -->
       <td><input type="checkbox" check="check">匿名评价</td>
     </tr>
     <tr></tr>
       <!--  <tr>
         <td align="right">评价等级：</td>
         <td>
         <input name="comment_rank" type="radio" value="1" id="comment_rank1"> <img src="/Public/Home/images/stars1.gif">
         <input name="comment_rank" type="radio" value="2" id="comment_rank2"> <img src="/Public/Home/images/stars2.gif">
         <input name="comment_rank" type="radio" value="3" id="comment_rank3"> <img src="/Public/Home/images/stars3.gif">
         <input name="comment_rank" type="radio" value="4" id="comment_rank4"> <img src="/Public/Home/images/stars4.gif">
         <input name="comment_rank" type="radio" value="5" checked="checked" id="comment_rank5"> <img src="/Public/Home/images/stars5.gif">
         </td>
       </tr> -->
        <tr>
          <td align="right" valign="top">评论内容：</td>
          <td>
         <!--  <textarea name="content" class="InputBorder" cols="80" rows="3"></textarea> -->
        <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
        <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
        <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
        <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
        <div>
            <script id="editor" name="content" type="text/plain" style="width:800px;height:150px;"></script>
        </div>
        <script type="text/javascript">
            var ue = UE.getEditor('editor');
        </script>
         <!--  <input type="hidden" name="cmt_type" value="0"> -->
          <input type="hidden" name="goods_id" value="<?php echo ($goods_info['goods_id']); ?>">
          </td>
        </tr>
        <tr></tr>
         <tr>
            <td>电脑晒图</td> 
            <td><input type="file" ></td>
        </tr>
        <tr></tr>
        <tr>
          <td colspan="2">
          <!--           <div class="captcha fl">
                    验证码：<input type="text" name="captcha" size="10" class="InputBorder">
                    <img src="/Public/Home/images/captcha.php" alt="captcha" >
                    </div> -->
            <input name="" type="submit" value="提交评论" class="bnt_number4 fr">
          </td>
        </tr>
      </tbody></table>
      </form>
</div>
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