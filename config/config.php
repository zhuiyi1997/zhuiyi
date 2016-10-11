<?php

return [
	'database' => [
		'database_type' => 'mysql',
		'database_name' => 'erhuo',
		'server' => '60.205.163.63',
		'username' => 'ytc',
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