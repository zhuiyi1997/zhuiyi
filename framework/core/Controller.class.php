<?php
class Controller
{

	public function render($file,$array)
	{
		ob_start();
		if(!empty($array))
		{
			extract($array);
		}
		require_once '/../views/'.$file.".php";
		ob_end_flush();
		
	}
}
?>