<?php
/* ------ IPORTANT ------------- */
/* DISABLE THIS WHEN GOES ONLINE */
/* ------ DISPLAY ERROR -------- */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/* ----------------------------- */
if(isset($_GET['url']) && $_GET['url']!=null){
	$url=explode('/', $_GET['url']);
}else{
	$url=null;
}

require_once('../_config/config.php');
require_once('../_config/path.php');

function __autoload($class_name){
	require_once '../_libs/'.$class_name.'.php';
}

Database::connectDb();

/* continue to execute code */

	?>
	<!doctype html>
	<html>
		<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta charset="UTF-8">
		<title>Admin page</title>
		<link rel="stylesheet" href="<?php echo ADMINURL; ?>css/style.css">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo ADMINURL.'js/admin_default.js'; ?>"></script>


		</head>
		<body>
			<div id="admin">
			<header>
				<div id="header">
					<div class="backToPublic float_left"><a href="<?php echo URL; ?>">Back to site</a></div>
					<!-- div.serach -->
					<div class="search_box float_left">
						<form action="<?php echo ADMINURL; ?>?p=search" method="post">
							<input class="float_left" type="text" name="searchq" placeholder="Search product" required/>
							<input class="shadow_box float_left" type="submit" name="search" value="Go"/>
						</form>
						<div class="clear"></div>
					</div>
					<!-- end search div -->
				</div><!-- div.header -->

			</header><!-- header -->
		<div id="main">
			<div class="left_content float_left">
				<br/>
				<div>
					<h3>Hello <strong></strong></h3>
				</div>
				<br/>
				<nav>
					<ul><li class="item1"><a href="<?php echo ADMINURL; ?>">HOME</a></li></ul>
					<ul class="admin_menu">
						<li class="item1 drop"><a href="#">+ NOVO</a>
							<ul class="dropdown-ul">
								<li class="subitem1"><a href="#">Dodaj kategoriju</a></li>
								<li class="subitem1"><a href="#">Dodaj proizvod</a></li>
							</ul>
						</li>
						<li class="item1 drop"><a href="#">+ IZMENI</a>
							<ul class="dropdown-ul">
								<li class="subitem1"><a href="<?php echo ADMINURL; ?>products/edit_products">Izmeni proizvod</a></li>
								<li class="subitem1"><a href="<?php echo ADMINURL; ?>edit/edit_products">Izmeni proizvod</a></li>
								<li class="subitem1"><a href="<?php echo ADMINURL; ?>edit/edit_category">Izmeni kategoriju</a></li>
							</ul>
						</li>
						<div class="clear"></div>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
			<div class="right_content float_left">

					<!-- main page content -->
					<?php
					if(isset($url[0]) && isset($url[1])){
						$page='pages/'.$url[0].'/'.$url[1].'.php';
						require_once($page);
					}else{

					}
					?>

					<div class="clear"></div>
				</div><!-- div.main_content -->
					<div class="clear"></div>
			</div><!-- div#content -->
		</div><!-- div.main -->
			<footer>
				<div id="footer">
					<span class="font_size_14"> Geooprema doo @2014 Privacy Notice | Condition of Use</span>
				</div>
			</footer>
		</div><!-- div#admin -->
		</body>
	</html>