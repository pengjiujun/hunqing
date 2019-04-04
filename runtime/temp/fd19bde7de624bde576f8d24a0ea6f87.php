<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp64\www\moban\public/../application/index\view\index\custom.html";i:1553077094;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>帮助客服</title>
	<link rel="stylesheet" href="/static/index/css/public.css">
	<style>
		* {
			margin: 0;
			padding: 0;
		}

		a {
			text-decoration: none;
		}

		li {
			list-style: none;
		}
		.content{
			width:100%;
			height:578px;
		}
		.top{
			width:100%;
			height:550px;
			border-bottom:1px solid black;
		}
		
		.bottom{
			
			width:100%;
			height:200px;
			padding-top:100px;
			text-align:center;
			color:#AF8B50;
		}
		.bottom p{
			font-size:22px;

		}
		.xian {
			height: 1px;
			margin-top:40px;
			text-align: center;
			border-top: 1px solid #e2e2e2;
		}
		.txt{
			position: relative;
			top:-12px;
			font-size:20px;
			background: #fff;
			display: inline-block;
		}

	</style>
</head>
<body>
<!--头部导航栏-->
<div id="header">
	<div class="logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
	<ul class="nav_list">
		<li><a href="/index/index"><p>首页</p><span></span></a></li>
		<li><a href="/index/find"><p>客源查询</p><span></span></a></li>
		<li><a href="/index/ad"><p>广告管理</p><span></span></a></li>
		<li><a href="/index/custom"><p>客服帮助</p><span></span></a></li>
	</ul>
</div>
<!--内容区-->
<div class="content">
	<div class="top">
		<img src="<?php echo $info['pic']; ?>" alt="" style="width:100%;height:100%;">
	</div>
	<div class="bottom">
		
		<p><span>客 服QQ:</span><?php echo $info['qq']; ?></p>
		<p><span>客服微信:</span><?php echo $info['weixin']; ?></p>
		<p><span>客服电话:</span><?php echo $info['phone']; ?></p>
		<div class="xian">
			<span class="txt">狮子座婚礼管家坚持口碑</span>
		</div>
	</div>
</div>
</body>
</html>