<?php
	$json_array = json_decode(file_get_contents(URL."json/products.json"),true);

	echo '<pre>';
	print_r($json_array);
	echo '</pre>';
	print_r( $json_array[13]);