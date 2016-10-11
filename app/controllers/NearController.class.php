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

	public function map()
	{
		$file = 'http://ip.taobao.com/service/getIpInfo2.php?ip=myip';
		$content = file_get_contents($file);
		$a = "/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}/";
		preg_match_all($a,$content,$match);
		$getIp = $match[0][0];

		$content = file_get_contents("http://api.map.baidu.com/location/ip?ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9&ip=".$getIp."&coor=bd09ll");
  		$json = json_decode($content);
 		
  		$data['x'] = $json->content->point->x;//按层级关系提取经度数据

  		$data['y'] = $json->content->point->y;//按层级关系提取纬度数据
  		echo json_encode($data);
	}

}
?>