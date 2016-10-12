<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Log;
use framework\core\Model;
class NearController extends \Controller{
	public function index()
	{
		$model = new Model();
		$data = $model->select('near','*');
		//判断鱼塘距离，获取经纬度

		$this->render('index');
		
	}

	public function getDistance($lat1, $lng1, $lat2, $lng2) 
	{ 
			$earthRadius = 6367000; //approximate radius of earth in meters 

			/* 
			Convert these degrees to radians 
			to work with the formula 
			*/ 

			$lat1 = ($lat1 * pi() ) / 180; 
			$lng1 = ($lng1 * pi() ) / 180; 

			$lat2 = ($lat2 * pi() ) / 180; 
			$lng2 = ($lng2 * pi() ) / 180; 

			/* 
			Using the 
			Haversine formula 

			http://en.wikipedia.org/wiki/Haversine_formula 

			calculate the distance 
			*/ 

			$calcLongitude = $lng2 - $lng1; 
			$calcLatitude = $lat2 - $lat1; 
			$stepOne = pow(sin($calcLatitude / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($calcLongitude / 2), 2); 
			$stepTwo = 2 * asin(min(1, sqrt($stepOne))); 
			$calculatedDistance = $earthRadius * $stepTwo; 

			return round($calculatedDistance); 
	} 

	//显示添加附近
	public function add()
	{
		$this->render('add');
	}

	//鱼塘进行入库
	public function save()
	{
		$data = $_POST;
		$file = $_FILES['near_image'];
		$info = pathinfo($file['name']);
		$name = md5(uniqid(rand(),true)).'.'.$info['extension'];
		move_uploaded_file($file['tmp_name'], ROOT_DIR.'/public/upload/'.$name);
		$data['image'] = $name;
		$model = new Model();
		$model->insert('near',$data);
	}

}
?>