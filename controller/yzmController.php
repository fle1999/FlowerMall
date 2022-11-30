<?php
	include 'createCode.php';
	// 开启session
	session_start();
	//调用创建验证码函数
	$cap = new Captcha(120,50);
	$cap->yzm();
?>
