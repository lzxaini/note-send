<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录主页</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login-style.css">
</head>
<body class="text-center login-body">
<form class="form-signin" action="login-check.php" method="post">
	<div class="lgo"></div>
	<h1 class="h3 mb-3 font-weight-normal">超级管理员登陆</h1>
	<label for="user-name" class="sr-only">用户名</label>
	<input type="name" name="username" id="user-name" class="form-control" placeholder="用户名" required autofocus>
	<label for="inputPassword" class="sr-only">用户密码</label>
	<input type="password" name="password" id="inputPassword" class="form-control" placeholder="用户密码" required>
<!-- 	<label for="user-name" class="sr-only">验证码</label>
	<input type="name" id="user-name"  name="verify" id="verify" class="form-control" placeholder="验证码" maxlength="10">
	<img src="verify.php"  onclick="this.src='verify.php?' + Math.random();" width="105" height="36"> -->
	<div class="checkbox mb-3">
	<label>
	  <input type="checkbox" value="remember-me"> 记住登录状态
	</label>
	</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit">立即登陆</button><br/>
	<p class="mt-5 mb-3 text-muted">豫 ICP备18039544号 ©版权所有2018~2019</p>
</form>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
