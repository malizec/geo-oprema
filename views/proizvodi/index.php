<div class="wrap1000">
	<?php
	$url = Url::breakUrl($_GET['url']);

	/* left content */
		echo '<div class="leftContent float_left">';

		Menu::leftNavMenu($url[0]);

		echo '</div><!-- div.leftContent -->';


	/* right cointent */

	echo '<div class="rightContent float_left">';

		if(isset($url[3])){

		}elseif(isset($url[2])){

			$url_res=explode('-', $url[2]);
			$cat_name=str_replace(' ', '-', Database::returnCatName($url[1]));

			$prod_res = Database::fetchData('products', '*', array('prod_serial'), array($url_res[0]));
			$prod = $prod_res->fetch_assoc();

					$p='';
					$p.='<div class="large_product_dispaly">';
					$p.='	<div class="prod_img float_left">';
					$p.='		<img src="'.PUBLICURL.'products/'.strtolower($cat_name).'/'.$url_res[0].'/'.$url_res[0].'.jpg" width="300" alt="Proizvod '.$url_res[0].'" />';
					$p.='	</div>';
					$p.='	<div class="large_product_info float_left">';
					$p.='		<div class="product_name">'.str_replace('-', ' ', $prod['prod_name']).'</div><!-- div.product_name -->';
					$p.='		<div class="product_desc">';
					$p.='			';
					$p.=			str_replace('\n', '<br/>', $prod['prod_desc']);
					$p.='		</div><!-- div.product_desc -->';
					$p.='		<div class="company_link"><a href="'.$prod['prod_out_link'].'" target="_blank">LINK KA PROIZVODJACU</a></div>';
					$p.='	</div>';
					$p.='	<div class="clear"></div>';

					$p.='	<div class="prod_spec">';
					$p.='		';
					
					$p.=$prod['prod_spec'];

					$p.='	</div>';

					$p.='</div>';
					echo $p;


		}elseif(isset($url[1])){
				$new_url=explode('-', $url[1]);
				if(isset($new_url[2]) && isset($new_url[3])){
					$sub_cat_id = $new_url[2];
					$res = Database::fetchData('products', '*', array('sub_cat_id'), array($sub_cat_id));				
				}else{
					$cat_id = $new_url[0];
					$res = Database::fetchData('products', '*', array('cat_id'), array($cat_id));				
				}
				
				if($res->num_rows > 0){
					while ($row = $res->fetch_assoc()) {
						Products::displayProducts($row);
					}
				}else{
					echo 'Nema trenutno proizvoda za zeljenu kategoriju proizvoda.';
				}


		}else{

				if(isset($_GET['brend']) && $_GET['brend']!=null){
					$array['brend'] = $_GET['brend'];
					$res = Database::fetchData('products', '*', array('brend_name'), array($array['brend']));
				}elseif(isset($_GET['q']) && $_GET['q']!=null){
					$array['q'] = $_GET['q'];
					$res = Database::fetchSearchData($array['q']);
				}else{
					$res = Database::fetchData('products', '*');
				}

				if(empty($res->num_rows) || $res->num_rows==0){
					/* if there isnt anymresult */
					/* dispaly no products info message */
					echo 'Trenutno nema proizvoda za zeljeni termin';
				}else{
					while ($row = $res->fetch_assoc()) {
						Products::displayProducts($row);
					}
				}

		}
		?>
		<div class="clear"></div>
	</div><!-- div.rightContent -->
	
</div><!-- div.wrap1000 -->