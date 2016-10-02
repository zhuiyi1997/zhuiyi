<?php
use framework\core\Model;
use framework\core\Config;
use framework\core\Log;
use app\models\School;
class IndexController extends \Controller{
	public function index()
	{
		//Log::log('查询了前十所学校');

		//$model = new School();
		//$result = $model->getOne(['id'=>1]);
		echo "<body style='background:#2f373a;font-family:Arial,Helvetica,sans-serif;font-size:80px;line-height:10em;text-align:center;color:#4e4e4e;min-width:920px;border-top:10px solid #0c0e0e;'>Hello,world。</body>";
		
		
		//$this->render('index/index',['name'=>$result]);
	}
}
?>