<?php
namespace framework\core;
class Model extends \PDO{

	public function __construct()
	{
		$dsn = 'mysql:host=localhost;dbname=test';
		$username = 'root';
		$passwd = "root";
		try{
			parent::__construct($dsn,$username,$passwd);
		}catch(\PDOException $e){
			echo $e->getMessage();
		}
	}

}