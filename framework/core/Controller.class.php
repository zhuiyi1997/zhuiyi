<?php
class Controller
{

	public function render($file,$array=array())
	{
		$name = strtolower(get_class($this));
		
		preg_match('/(\w+)controller/',substr($name,16),$arr);
		
		$controller = $arr[1];

		$filename = VIEW_PATH."/".$controller."/".$file;

			Twig_Autoloader::register();
			$loader = new Twig_Loader_Filesystem(VIEW_PATH);

			
			$twig = new Twig_Environment($loader,array(
					'cache' => ROOT_DIR.'/cache',
					'debug' => DEBUG,
				));
			$template = $twig->loadTemplate($controller.'/'.$file.".php");
			$template->display($array);
	}
}
?>