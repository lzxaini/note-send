<?php
/*
 * curl_post请求短信发送函数
 * $text  欲请求的文本内容
 * return json数据
 */
// echo "<script>alert('验证码已经发送，请注意查收！');</script>";
//go方法window.history.back()返回上一页，时间为100毫秒

function curl_post($text){
	// $mobile = $_POST["mobile"];
    $url = "http://120.26.38.54:8000/interface/balance.aspx";
    $post_data = array ("account" => "caiwm","password" => "123qwe");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
// function message(){
// 	$number = $_POST["user_content"];
//     $city = 1;
//     if($city != null){
//         $str = $number;
//         echo $str;
//     }else{
//         $str = "【来源大祥子】很抱歉，出错了";
//     }
//     return $str;
// }
// curl_post(message()); 
?>