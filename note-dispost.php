<?php
include("conn.php");
//获取判断用户是否登录
    session_start();
    if (!isset($_SESSION['backuserid'])) {
        alert("登录超时，请重新登陆","login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>短信管理员</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/main-style.css">
</head>
<body>
	<header class="navbar-fixed-top top-header">
		<!-- <img src="images/banner.png" alt="banner" class="head-banner"> --><h2>短信后台管理系统</h2>
		<h4 class=" hidden-xs hidden-sm">
			<?php echo date("Y年m月d日 H:i",time()); ?><br/>
			<a href="mailto:1245634367@qq.com">
				投诉 <span class="glyphicon glyphicon-envelope"></span>
			</a>&nbsp;|&nbsp;
			<a href="logout.php">
				退出 <span class="glyphicon glyphicon-off"></span>
			</a>
		</h4>
	</header>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-top: 70px;">
		<div class="container-fluid"> 
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#example-navbar-collapse">
				<!-- <span class="sr-only">切换导航</span> -->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand">您好尊敬的管理员：<?php echo $_SESSION['username'];?></span>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="example-navbar-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="#">短信管理</a></li>
				<li><a href="#">彩信管理</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						发送统计<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">占位</a></li>
						<li><a href="#">占位</a></li>
						<li><a href="#">占位</a></li>
<!-- 						<li class="divider"></li>
						<li><a href="#">分离的链接</a></li>
						<li class="divider"></li>
						<li><a href="#">另一个分离的链接</a></li> -->
					</ul>
				</li>
				<li><a href="#">财务管理</a></li>
				<li><a href="#">客户管理</a></li>
				<li><a href="#">系统管理</a></li>
				<li><a href="#">其他管理</a></li>
			</ul>
		</div>
		</div>
	</nav>
	<ul class="breadcrumb navbar-fixed-top">
		您当前所在位置：
		<li><a href="#">首页</a></li>
		<li><a href="#">短信任务</a></li>
		<li class="active">新建任务</li>
	</ul>
	<div class="main-body">
		<marquee>nihao...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
		<marquee>主体...</marquee>
	</div>
	<footer id="footer">
		<div class="container">
			<p class="footer_p_a">
				<a href="mailto:1245634367@qq.com">合作事宜 | </a>
				<a href="mailto:1245634367@qq.com">联系作者</a> | 
				<a href="https://qr.alipay.com/fkx02024egkvzio4jm3cb21">捐助本站</a><br/>
				<a href="https://www.baidu.com/">百度一下 | </a>
				<a href="https://map.baidu.com/">百度地图 | </a>
				<a href="https://fanyi.baidu.com/">百度翻译 | </a>
				<a href="https://pan.baidu.com/">百度网盘 | </a>
				<a href="https://baike.baidu.com/">百度百科</a>
			</p>
			<p>豫 ICP备18039544号 &copy;版权所有2018~2019</p>
		</div>
	</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>