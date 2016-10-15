<?php
namespace app\controllers;
use framework\core\Config;
use framework\core\Log;
use framework\core\Model;
class NearController extends \Controller{
	public function index()
	{
		
		//$model = new Model();
		//$data = $model->select('near','*');
		//判断鱼塘距离，获取经纬度
		//显示首页
		
		$this->render('index');


	}

	public function list()
	{
		$limit = isset($_POST['limit'])?$_POST['limit']:0;
		$model = new Model();
		$data = $model->select('near','*',["LIMIT" => [$limit, 10]]);
		$count = count($data);
		if($limit==0)
		{
			$this->render('list',['data'=>$data,'count'=>$count]);
		}else{
			echo json_encode($data);
		}
		
	}

	//显示附近点
	public function getNear()
	{
		$data = $_POST;
		//当前经纬度
		$number = $this->getAround($data['y'],$data['x'],2000);
		$model = new Model();
		$info = $model->select('near','*',[
				'AND'=>[
					'near_long[<>]'=>[$number['minlng'],$number['maxlng']],
					'near_lat[<>]'=>[$number['minlat'],$number['maxlat']],
				]
			]);	
		foreach($info as $key=>$item)
		{
			$info[$key]['distance']=$this->getDistance($item['near_lat'],$item['near_long'],$data['y'],$data['x']);
		}
		$info_arr = [];
		foreach($info AS $uniqid => $row){  
    		foreach($row AS $key=>$value){  
        		$info_arr[$key][$uniqid] = $value;  

    		}  
		}  
		array_multisort($info_arr['distance'], SORT_ASC, $info); 
		echo json_encode($info);
	}


	public function getAround($lat,$lon,$raidus){
				$PI = 3.14159265;

				$latitude = $lat;
				$longitude = $lon;

				$degree = (24901*1609)/360.0;
				$raidusMile = $raidus;

				$dpmLat = 1/$degree;
				$radiusLat = $dpmLat*$raidusMile;
				$minLat = $latitude - $radiusLat;
				$maxLat = $latitude + $radiusLat;

				$mpdLng = $degree*cos($latitude * ($PI/180));
				$dpmLng = 1 / $mpdLng;
				$radiusLng = $dpmLng*$raidusMile;
				$minLng = $longitude - $radiusLng;
				$maxLng = $longitude + $radiusLng;
				$number['minlat']=$minLat;
				$number['maxlat']=$maxLat;
				$number['minlng']=$minLng;
				$number['maxlng']=$maxLng;
				return $number;
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
		$model = new Model();
		$data = $_POST;
		$data['near_owner'] = 1;
		if(!$model->select('near','*',['OR'=>['near_name'=>$data['near_name'],'near_owner'=>$data['near_owner']]]))
		{
			$file = $_FILES['near_image'];
			$info = pathinfo($file['name']);
			$name = md5(uniqid(rand(),true)).'.'.$info['extension'];
			move_uploaded_file($file['tmp_name'], ROOT_DIR.'/public/upload/'.$name);
			$data['near_image'] = $name;
			$result = $model->insert('near',$data);

			if($result)
			{
				echo "提交成功";
			}else{
				echo "提交失败，检查后在提交";
			}
		}else{
			echo "您已经创建过鱼塘或鱼塘已存在";
		}
		
	}

	//我的鱼塘管理
	public function mynear($id)
	{
		$limit = isset($_POST['limit'])?$_POST['limit']:0;
		$model = new Model();
		if($limit==0)
		{
			$info = $model->get('near','*',['id'=>$id]);
			//查询发布的商品
			$goods = $model->select('goods',["[>]users" => ["user_name" => "user_name"]],'*',['goods.near_name'=>$info['near_name'],'LIMIT'=>[$limit,10]]);
			$count = $model->count('goods',['near_name'=>$info['near_name']]);
		    $this->render('mynear',['info'=>$info,'goods'=>$goods,'count'=>$count]);
		}else{
			$info = $model->get('near','*',['id'=>$id]);
			//联查users表
			$goods = $model->select('goods',["[>]users" => ["user_name" => "user_name"]],'*',['goods.near_name'=>$info['near_name'],'LIMIT'=>[$limit,10]]);
			echo json_encode($goods);
		}
	}
}