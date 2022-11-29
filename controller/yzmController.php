<?php
	include 'createCode.php';
	
	$cap = new Captcha();
	$cap->render(1000,500);
	$cap->show();
?>
