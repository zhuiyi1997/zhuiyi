<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Model;
use app\models\Message;
class MessageController extends \Controller{
	public function index($page=1)
	{

		//读取数据库所有留言
		$model = new Message();
		$sum = $model->count('message');


		$data = $model->query("select * from message order by addtime desc")->fetchAll(\PDO::FETCH_ASSOC);
		foreach($data as $key=>$one)
		{
			$data[$key]['title'] = str_replace(mb_substr($one['title'],6),'……',$one['title']);
			$data[$key]['content'] = str_replace(mb_substr($one['content'],25),'……',$one['content']);
		}
		$this->render('index',['data'=>$data]);

		
	}


	//获取一条消息内容
	public function getOne($id)
	{
		$model = new Message();
		$data = $model->getOne(['id'=>$id]);
		echo json_encode($data);
	}

	//添加一条留言
	public function addMessage()
	{
		//显示添加留言页面
		$this->render('add');
	}


	//添加入库
	public function save()
	{
		$data = $_POST;
		$data['addtime'] = date('Y-m-d H:i:s');
		$model = new Message();
		$result = $model->insert('message',$data);
		$this->render('jump',['url'=>'index.php?c=message&a=index','msg'=>'留言添加成功']);
	}

}
?>