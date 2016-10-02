<?php
namespace framework\core;
use framework\core\Config;
class Log{

	static $class;

	static public function init()
	{
		$drive = Config::getInstance()->get('log.drive');
		$class = '\framework\core\log\\'.$drive;
		self::$class = new $class;
	}


	static public function log($message,$file='log')
	{
		self::$class->log($message,$file);
	}
}
?>