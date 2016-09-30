<?php
//初始化字符集

//初始化系统常量
//初始化错误信息
//初始化配置信息
//自动加载
//开启session
//url初始化
//权限验证
//分发

define('ROOT_DIR',realpath(''));
define('APP_PATH',ROOT_DIR.'/app');
define('CORE_PATH',ROOT_DIR.'/framework/core');
define('CONFIG_PATH',ROOT_DIR."/config");
define('CONTROLLERS_PATH',APP_PATH."/controllers");
define('VIEW_PATH',APP_PATH."/views");
define('DEBUG',true);
if(DEBUG)
{
	ini_set('display_error','On');
}else{
	ini_set('display_error','Off');
}
require_once APP_PATH."/common/function.php";
require_once CORE_PATH."/Route.php";
require_once CORE_PATH."/Controller.class.php";
require_once CORE_PATH."/View.class.php";
require_once CORE_PATH."/Autoload.php";

spl_autoload_register('Autoload::load');



//set_include_path(CONTROLLERS_PATH);
/*
function include_warning($errno,$errstr)
{
	if($errno == E_WARNING)
	{
		throw new Exception("没有找到类");
	}else{

	}
}
set_error_handler('include_warning');
*/

$route = Route::getInstance();
$route->route();
?>
