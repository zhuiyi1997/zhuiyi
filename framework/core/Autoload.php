<?php
class Autoload{

	public static $classMap = array();

	public static function load($class)
	{
		if(isset(self::$classMap[$class])) 
		{
			return true;
		}else{
			$class = str_replace('\\','/',$class);
			$file = str_replace('/','\\',ROOT_DIR."\\".$class.'.class.php');
			if(!file_exists($file))
			{
				$file = str_replace('/','\\',ROOT_DIR.'\\'.$class.'.php');
			}
			include $file;
			self::$classMap[$class] = $class;
		}
	}
}
?>