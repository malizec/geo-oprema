<?php

/**
* 
*/
class View{
	
	function __construct(){
	}

	function render($file){
		if(file_exists('views/'.$file.'.php')){
			require_once('views/'.$file.'.php');
		}else{
			URL::header_status(URL.'404');
		}
	}

	function viewPage($page){
		if(!empty($page)){
			if(file_exists('views/'.$page.'/index.php')){
				require_once('views/'.$page.'/index.php');
			}else{
				URL::header_status(URL.'404');
			}
		}else{	
			require_once('views/home/index.php');
		}
	}

}