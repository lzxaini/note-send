<?php 
header('Content-Type:text/html;charset=utf-8');

date_default_timezone_set('PRC');

$conn=@mysqli_connect("localhost","root",'19981003',"note") or die('数据库链接失败！');
mysqli_query($conn,'set names utf8');

function alert($str,$url){
	echo '<script>alert("'.$str.'");location.href="'.$url.'"</script>';
}
// ur_time('time');
 ?>
