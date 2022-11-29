<?php
	class Captcha{
		var $width; 	//画布宽度
		var $height; //画布高度
		var $img; 	//画布
		// var $len;	//验证码长度
		// var $code; 	//验证码
		//参数传递
		// public function __construct(int $width = 100,int $height = 30,int $len = 4) {
		// 	$this->width = $width;
		// 	$this->height = $height;
		// 	$this->len = $len;
		// }
		//绘制画布
		function render($width,$height) {
			$this->width = $width;
			$this->height = $height;
			$this->img = imagecreate($width,$width);
			$back = imagecolorallocate($img,245,245,245);	//背景颜色
		}
		//显示
		function show(){
			header("Content-type:image/png");
			// echo $this->width;
		}
	}
?>
