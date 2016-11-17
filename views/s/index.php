<div id="key">gfhx</div><hr/>
<?php
$url = Url::breakUrl($_GET['url']);

$s=isset($url[1])?$url[1]:'';

if(isset($url[1]) && $url[1]!=''){
	echo 'search for "'.$url[1].'"<hr/>';
}
