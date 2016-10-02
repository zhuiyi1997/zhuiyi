<?php

return [
	'database' => [
		'database_type' => 'mysql',
		'database_name' => 'test',
		'server' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
	],
	'app' => [
		'defaultController' => 'index',
		'defaultAction' => 'index',
	],
	'log' => [
		'drive' => 'file',
		'path' => ROOT_DIR.'/log/',
	],

];

?>