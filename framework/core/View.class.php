<?php
class View{

	public function render($file,$array)
	{
		ob_start();
		if(!empty($array))
		{
			foreach($array as $keykey=>$valval){
				eval("$".$keykey."='".$valval."';");
			}
		}
		require_once '/../views/'.$file;
		ob_end_flush();
		
	}
}