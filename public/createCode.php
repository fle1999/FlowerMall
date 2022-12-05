<?php
class Captcha{
	var $width = null;
	var $height = null;
	//构造函数
	public function __construct($w,$h) {
	    $this->width = $w;
		$this->height = $h;
	}
	// 创建验证码
	public function yzm(){
		// 1.创建画布
		$img = imagecreatetruecolor($this->width, $this->height);
		// 2.定义画布背景颜色
		$bgcolor = imagecolorallocate($img, 255, 255, 255);
		$rand_color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
		// 3.填充背景 默认是黑色
		imagefill($img, 0, 0, $bgcolor);
		// 4.绘制验证码
		putenv('GDFONTPATH=' . realpath('.'));
		$font = '../../views/src/font/simkai.ttf';//字体文件
		$x = 11;
		$word = "";
		$content = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";//定义验证码的内容
		for ($i = 0; $i < 4; $i++) {
			$font_interval = 30;	//字体间隔
			$rand_num = mt_rand(0, 9);	//每一字体随机数
			$word .= $rand_num;
			$rand_color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
			imagettftext($img, 20, mt_rand(-20, 20), $font_interval * $i + $x, 30, $rand_color, $font, $rand_num);
		}
		// 把验证码存入session
		// Session::put('yzm',$word);
		// 5.页面输出
		header("content-type:image/png");
		imagepng($img);
		//销毁图片
		imagedestroy($img);
		return $word;
	}
}
?>
