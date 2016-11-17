<?php

/**
* 
*/
class Products{
	
	function __construct(){
		# code...
	}

	static public function displayProducts($row){
		$url_res=explode('-', $row['prod_name']);
		$cat_name=str_replace(' ', '-', Database::returnCatName($row['cat_id']));

		$p='';
		$p.='<div class="prod_link float_left">';
		$p.='	<a href="'.URL.'proizvodi/'.$row['cat_id'].'/'.$row['prod_serial'].'-'.$row['prod_name'].'">';
		$p.='		<img src="'.PUBLICURL.'products/'.strtolower($cat_name).'/'.$row['prod_serial'].'/'.$row['prod_serial'].'.jpg" width="100" alt="Proizvod '.$url_res[0].'" />';
		$p.='		<br/>';
		$p.='		<div class="product_name">'.str_replace('-', ' ', $row['prod_name']).'</div><!-- div.product_name -->';
		$p.='		<div class="product_desc">';
		$p.=			strtoupper(substr($row['prod_desc'], 0, 70).'...');
		$p.=		'</div><!-- div.product_desc -->';
		$p.='	</a>';
		$p.='	<div class="product_details"><a href="'.URL.'proizvodi/'.$row['cat_id'].'/'.$row['prod_serial'].'-'.$row['prod_name'].'">DETALJI</a></div><!-- div.products_details -->';

		$p.='</div>';
		echo $p;

	}
}