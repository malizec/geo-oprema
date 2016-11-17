<?php

/**
* 
*/
class Text{
	
	function __construct(){
		# code...
	}

	static public function prePrintR($val){
		echo '<pre>';
		echo print_r($val);
		echo '</pre>';
	}

}