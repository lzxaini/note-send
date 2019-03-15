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
		<h4 class="hidden-xs hidden-sm">
			登录系统时间：<span class="glyphicon glyphicon-alert"></span>
			<?php echo date("Y年m月d日 H:i",time()); ?>
			
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
			<span class="navbar-brand">您好：<?php echo $_SESSION['username'];?></span>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="example-navbar-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="#">创建短信任务</a></li>
				<li><a href="##">批量发送短信</a></li>
				<li><a href="##">定时发送短信</a></li>
				<li><a href="#">余额查询</a></li>
				<li><a href="mailto:1245634367@qq.com">投诉建议 <span class="glyphicon glyphicon-envelope"></span></a></li>
				<li><a href="logout.php">退出系统 <span class="glyphicon glyphicon-off"></span></a></li>
<!-- 				<li><a href="#">系统管理</a></li>
				<li><a href="#">其他管理</a></li> -->


			</ul>
		</div>
		</div>
	</nav>
	<ul class="breadcrumb navbar-fixed-top hidden-xs hidden-sm">
		您当前所在位置：
		<li><a href="index.php">首页</a></li>
		<li><a href="note-send.php">短信任务</a></li>
		<li>创建短信任务</li>
	</ul>
	<div class="main-body">
		<form action="note-send-dispost.php">
			<textarea name="phone-user" id="phone-user" cols="30" rows="10"></textarea><br/>
			<textarea name="note-content" id="content" cols="30" rows="10"></textarea>
		</form>
	</div>
<?php 
include("footer.php");
?>