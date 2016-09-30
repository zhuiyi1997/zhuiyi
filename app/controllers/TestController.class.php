<?php
class TestController extends Controller{
	public function index()
	{
		echo "Test控制器";
	}

	public function test($name,$age)
	{
		echo $name.'|'.$age;
	}
}
?>