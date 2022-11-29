<?php
	class test {
		var $num1;
		var $num2;
		function a($num1,$num2){
			echo "初始化变量$num1<br />";
			$this->num1 = $num1;
			$this->num2 = $num2;
		}
		
		function show(){
			echo '执行show()方法';
			echo $this->num1;
		}
	}
	
	$te = new test();
	$te->a(10,20);
	$te->show();
?>