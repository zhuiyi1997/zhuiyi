<?php
use framework\core\Config;
class TestController extends Controller{
	public function index()
	{
		$config = Config::getInstance();
		dump($config);
		
	}

	public function test($name,$age)
	{
		echo $name.'|'.$age;
	}
}
?>