<?php
use framework\core\Model;
use framework\core\Config;
use framework\core\Log;
use app\models\School;
class IndexController extends \Controller{
	public function index()
	{
		//Log::log('查询了前十所学校');

		$model = new School();
		$result = $model->getOne(['id'=>1]);
		
		$this->render('index/index',['name'=>$result]);
	}
}
?>