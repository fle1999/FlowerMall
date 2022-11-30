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
		$im = imagecreatetruecolor($this->width, $this->height);
		// 2.绘制颜色
		$white = imagecolorallocate($im, 255, 255, 255);
		$rand_color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
		// 3.填充背景 默认是黑色
		imagefill($im, 0, 0, $white);
		// 4.绘制验证码
		putenv('GDFONTPATH=' . realpath('.'));
		$font = '../public/src/font/simkai.ttf';//字体文件
		$x = 11;
		$word = "";
		for ($i = 0; $i < 4; $i++) {
			$f = 30;
			$rand_num = mt_rand(0, 9);
			$word .= $rand_num;
			$rand_color = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
			imagettftext($im, 20, mt_rand(-20, 20), $f * $i + $x, 30, $rand_color, $font, $rand_num);
		}
		// 把验证码存入session
		// Session::put('yzm',$word);
		// 5.页面输出
		header("content-type:image/png");
		imagepng($im);
		//销毁图片
		imagedestroy($im);
		}
	}
?>
