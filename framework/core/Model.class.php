<?php
namespace framework\core;
use framework\core\Config;
class Model extends \medoo{

	public function __construct()
	{
		$option = Config::getInstance()->get('database');
		parent::__construct($option);
	}

}