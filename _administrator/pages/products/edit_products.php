<?php

print_r($url);

if(isset($url[2])){
	$res = Database::fetchData('products', '*', array('prod_id'), array($url[2]));
	while ($row = $res->fetch_assoc()) {
		Products::displayProducts($row);
	}
}elseif(isset($url[1])){
	$res = Database::fetchData('products', '*');
	while ($row = $res->fetch_assoc()) {
		echo '<hr/>';
		echo $row['prod_name'].$row['prod_id'].'<br/>';
		echo $row['cat_id'].'<br/>';
		echo $row['prod_serial'].'<br/>';
		echo $row['brend_name'].'<br/>';
		echo $row['prod_desc_img'].'<br/>';
		echo $row['prod_desc'].'<br/>';
		echo '<hr/>';
	}

}else{

}