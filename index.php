<?php

/* ------ IPORTANT ------------- */
/* DISABLE THIS WHEN GOES ONLINE */
/* ------ DISPLAY ERROR -------- */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/* ----------------------------- */

require_once '_config/config.php';
require_once '_config/path.php';

Database::connectDb();


// also spl_autolader_register (take a look at it fi you like)
	function __autoload($class){
		require_once '_libs/'.$class.'.php';
	}
	if(isset($_GET['url'])){
		$url=Url::breakUrl($_GET['url']);
	}

	$view=new View();

/* display header */
	$view->render('header');



/* display page */
	if(isset($url[2])){
		$view->viewPage($url[0]);
	}elseif(isset($url[1])){
		$view->viewPage($url[0]);
	}elseif(isset($url[0])){
		$view->viewPage($url[0]);
	}else{
		$view->viewPage('home');
	}

/* display footer */
	$view->render('footer');