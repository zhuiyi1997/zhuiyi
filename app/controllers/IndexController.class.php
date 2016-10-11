<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Log;
use framework\core\Model;
class IndexController extends \Controller{
	public function index()
	{
		//Log::log('查询了前十所学校');

		//$model = new School();
		//$result = $model->getOne(['id'=>1]);
		//echo "<body style='background:#2f373a;font-family:Arial,Helvetica,sans-serif;font-size:80px;line-height:10em;text-align:center;color:#4e4e4e;min-width:920px;border-top:10px solid #0c0e0e;'>Hello,world。</body>";
		/*
		if(!empty($_SESSION['user_id']))
		{
			$id = $_SESSION['user_id'];

			$model = new Model();
			$data = $model->get('users','*',['user_id'=>$id]);
			
			$this->render('info',['data'=>$data]);
		}else{
			//显示登录页面
			$this->render('login');
		}
		*/
		$this->render('index');
		
	}

	public function login()
	{
		$data = $_POST;

		$model = new Model();
	
		if($info = $model->get('users','*',['AND'=>['user_name'=>$data['user_name'],'user_passwd'=>$data['user_passwd']]]))
		{
			$_SESSION['user_id'] = $info['user_id'];
			echo 1;
		}else{
			echo 0;
		}
	}

}
?>