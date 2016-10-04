<?php
use framework\core\Log;
use framework\core\Config;
class Route{
	protected $_controller;
	protected $_action;
	protected $_params;
	protected static $_instance;

	public static function getInstance()
	{
		if(!(self::$_instance instanceof self)){
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	private function __construct(){
		$this->_controller = Config::getInstance()->get('app.defaultController');
		$this->_action = Config::getInstance()->get('app.defaultAction');
		$this->_params = array();
		$request = $_SERVER['REQUEST_URI'];
		$url = parse_url($request);
		if(isset($url['query']))
		{
			$params = explode('&',$url['query']);
			foreach($params as $key=>$val){
				$arr[] = explode('=',$val);
			}
			foreach($arr as $k=>$v)
			{
				$keys[] = $v[0];
				$values[] = $v[1];
			}
			$params = array_combine($keys,$values);

		
			$this->_controller = !empty($params['c'])?$params['c']:$this->_controller;

			$this->_action = !empty($params['a'])?$params['a']:$this->_action;
			unset($params['c']);
			unset($params['a']);

		
			$this->_params = $params;
		}
	
	}

	public function route()
	{
		Log::init();
		$this->_controller = ucfirst(strtolower($this->getController()));
		

		$class = "\app\controllers\\".$this->getController()."Controller";
		

		//$controller = new $class();

			$rc = new ReflectionClass($class);
				if($rc->hasMethod($this->getAction())){
					$controller = $rc->newInstance();

					$method = $rc->getMethod($this->getAction());
					$method->invokeArgs($controller,array_values($this->_params));
				}else{
					throw new Exception('Action');
				}
			
	}

	public function getParams()
	{
		return $this->_params;
	}

	public function getController()
	{
		return $this->_controller;
	}

	public function getAction()
	{
		return $this->_action;
	}

}