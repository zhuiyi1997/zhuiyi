<?php
class IndexController extends Controller{
	public function index()
	{
		$model = new \framework\core\Model();
		$model->query('set names utf8');
		$sql = "select schoolname from school limit 10";
		$result = $model->query($sql)->fetchAll();
		$this->render('index.php',['name'=>$result]);
	}
}
?>