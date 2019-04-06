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
		<h2>短信后台管理系统</h2>
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
					<li><a href="note-send.php">创建短信任务</a></li>
					<li><a href="Batch-send.php">批量发送短信</a></li>
					<!-- <li><a href="##">定时发送短信</a></li> -->
					<li><a href="balance.php">余额查询</a></li>
					<li><a href="mailto:1245634367@qq.com">投诉建议 <span class="glyphicon glyphicon-envelope"></span></a></li>
					<li><a href="logout.php">退出系统 <span class="glyphicon glyphicon-off"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>


	<div class="panel panel-primary"  style="margin: 120px auto">
		<div class="panel-heading">
			<h3 class="panel-title">
			您当前所在位置：
				<a href="index.php">首页> </a>
				<a href="note-send.php">短信任务> </a>
				批量短信任务
			</h3>
		</div>
		<div class="panel-body" class="form-group">
			<form action="note-send-dispost.php" method="post">
				<article>
					<textarea class="form-control text-area" name="user_content" id="phone-user" cols="30" rows="8" placeholder="请输入要发送的内容"></textarea><br/>
					<textarea class="form-control text-area" name="mobile" id="myNumber" cols="30" rows="8"></textarea><br/>
					<input type="file" name="upFile">暂时只支持.txt文件<br/>
					<input  class="btn btn-primary" type="submit" value="短信发送测试">
					<input class="btn btn-warning" type="reset" value="清空所有内容">	
				</article>
				<aside class="hidden-xs hidden-sm">
					定时发送：<input type="date"><br/>
					信息模板：<br/>
					发送记录：<br/>
					失败记录：<br/>
				</aside>
			</form>	
		</div>
	</div>
<script type="text/javascript">
	   var input_file=document.querySelector("input");

	   input_file.onchange=function() {
	   	   var files=this.files;
	   	   var file=files[0];
	   	   //创建读取器
	   	   var  reader=new FileReader();
	   	   
	   	   //将数据读取成文本形式
	   	   reader.readAsText(file);
	   	   reader.onload=function(){
	   	   	var	num = reader.result;
	   	   	document.getElementById("myNumber").innerHTML=num;
	   	       // console.log(reader.result);
	   	    }

	   }

</script>
<?php 
include("footer.php");
?>