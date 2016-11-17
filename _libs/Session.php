<?php

/**
* 
*/
class Session{
	
	function __construct(){
		# code...
	}

	static public function init(){
		session_start();
	}
}

Session::init();