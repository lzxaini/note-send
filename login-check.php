<?php 
include('conn.php');
//接收登录数据
$username=$_POST['username'];
$password=$_POST['password'];
//验证数据
if (strlen($username)<3) {
	echo "用户名不能少于3个字";exit;
}
//访问数据库验证数据
$sql = "select * from note_ad where username='$username' and password='$password'";
$rs = mysqli_query($conn,$sql);
if ($row = mysqli_fetch_assoc($rs)) {
	//登陆成功，写SESSION，跳转登录后页面
	session_start();
	$_SESSION['backuserid']=$row['id'];
	$_SESSION['username']=$row['username'];
	alert("登录成功！跳转中~~~","index.php");
}else{
	alert("登录失败！请检查用户名或密码是否正确","login.php");
}
 ?>
