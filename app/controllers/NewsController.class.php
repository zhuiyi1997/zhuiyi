<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Model;
use app\models\News;
class NewsController extends \Controller{
	public function index()
	{
		//读取所有新闻
	
		$model = new Model();
		$data = $model->select('news','*');
		$this->render('index',['data'=>$data]);
		
	}


	//获取一条消息内容
	public function getOne($id)
	{
		$model = new News();
		$data = $model->getOne(['id'=>$id]);

		$this->render('one',['data'=>$data]);
	}

	//添加一条留言
	public function addOne()
	{
		$data = $_POST;
		$data['addtime'] = date('Y-m-d H:i:s');
		$data['user_id'] = $_SESSION['user_id'];
		$model = new News();
		$result = $model->insert('news',$data);	
		echo $result;	
	}

	//修改信息
	public function updateOne()
	{
		$data = $_POST;
		$id = $_SESSION['user_id'];
		$model = new Model();
		$model->update('users',$data,['user_id'=>$id]);

	}

	//上传图片
	public function upload()
	{
		$data = $_FILES['image'];
		$info = pathinfo($data['name']);
		$ID = md5(uniqid(rand(),true));
		move_uploaded_file($data['tmp_name'],ROOT_DIR.'/public/images/'.$ID.'.'.$info['extension']);
		$id = $_SESSION['user_id'];
		$model = new Model();
		$model->update('users',['user_image'=>$ID.'.'.$info['extension']],['user_id'=>$id]);
		echo $ID.'.'.$info['extension'];
	}

}
?>