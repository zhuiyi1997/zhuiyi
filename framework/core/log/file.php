<?php
namespace framework\core\log;
use framework\core\Config;

class file{

	public $path;

	public function __construct()
	{
		$this->path = Config::getInstance()->get('log.path');
	}

	public function log($message,$file)
	{
		if(!is_dir($this->path.date('YmdH',time())))
		{
			mkdir($this->path.date('YmdH',time()),'0777',true);
		}
		return file_put_contents($this->path.date('YmdH',time()).'/'.$file.".php",date('Y-m-d H:i:s',time()).$message.PHP_EOL,FILE_APPEND);
	}



}