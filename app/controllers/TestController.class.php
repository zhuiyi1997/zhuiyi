<?php
namespace app\controllers;
use framework\core\Config;
class TestController extends \Controller{
	public function index()
	{

		$data = "zhuiyi";
		$this->render('index',['data'=>$data]);
		
	}

}
?>