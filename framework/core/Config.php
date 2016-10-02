<?php
namespace framework\core;

class Config
{
	public $filename = 'config.php';
	protected static $obj = null;
	protected $config = array();


	private function __construct(){}

	private function __clone(){}

	public static function getInstance()
	{
		if(self::$obj instanceof self)
		{
			return self::$obj;
		}


		return self::$obj = new Config();
	}

	public function get($name)
	{

		$file = CONFIG_PATH."/".$this->filename;
		$this->config = include $file;
		if(strpos($name,'.')!==false)
		{
			$params = explode('.',$name);
			return $this->config[$params[0]][$params[1]];
		}else{
			return $this->config[$name];
		}
	}

 
}