<?php

/**
* 
*/
class Menu{
	
	function __construct(){
		# code...
	}

	static public function mainNav(){
	?>
	<nav>
		<ul>
			<li class="float_left"><a href="<?php echo URL; ?>home">
				<span class="home_sprite_icon"></span>
			</a></li>
			<li class="drop float_left"><a href="<?php echo URL; ?>proizvodi">PROIZVODI</a>
				<ul class="dropbox-content">
				<?php
				$result = Database::query("SELECT * FROM category");
				$m='';
					while($row=$result->fetch_assoc()){
						$m.='	<li class="popup_active"><a href="'.URL.'proizvodi/'.$row['cat_id'].'-'.strtolower(str_replace(' ', '_', $row['cat_name'])).'">'.strtoupper($row['cat_name']).'</a>';
						
						/* use all subcategory for cat id */
								$cat_id='"'.$row['cat_id'].'"';
						 		$sub_result = Database::query("SELECT * FROM sub_category WHERE cat_id=$cat_id");
						 		if($sub_result->num_rows > 0){ /* if is some result display loop */
									$m.='<ul class=left_popup_dropbox>';
										while($row2=$sub_result->fetch_assoc()){
											$m.='<li><a href="'.URL.'proizvodi/'.$row['cat_id'].'-'.strtolower(str_replace(' ', '_', $row['cat_name'])).'-'.$row2['sub_cat_id'].'-'.$row2['sub_cat_name'].'">'.strtoupper($row2['sub_cat_name']).'</a>';

											$m.='</li>';
										}
									$m.='</ul>';
								}
						/* */
						$m.='</li>';
					}
				/* display costructed menu */
				echo $m;
				?>
				</ul>
			</li>
			<!-- <li class="float_left"><a href="<?php echo URL; ?>onama">O NAMA</a></li> -->
			<li class="float_left"><a href="<?php echo URL; ?>softver">SOFTVER</a></li>
			<li class="float_left"><a href="<?php echo URL; ?>novosti">NOVOSTI</a></li>
			<li class="float_left"><a href="<?php echo URL; ?>kontakt">KONTAKT</a></li>
			<li class="clear"></li>
		</ul>
	</nav>
    <?php
	}

	static public function leftNavMenu($page){
		if($page=='proizvodi'){
			Menu::productsMenu();
		}
	}

	static public function productsMenu(){
		/* constuct menu */
		$result = Database::query("SELECT * FROM category");
		$m='';
			$m.='<div class="leftNavMenu float_left">';
			$m.='	<div class="leftNavTitle">KATEGORIJA</div>';
			$m.='	<ul class="menuContent">';
			while($row=$result->fetch_assoc()){
				$m.='	<li class="popup_active"><a href="'.URL.'proizvodi/'.$row['cat_id'].'-'.strtolower(str_replace(' ', '_', $row['cat_name'])).'">'.strtoupper($row['cat_name']).'</a>';
				
				/* use all subcategory for cat id */
						$cat_id='"'.$row['cat_id'].'"';
				 		$sub_result = Database::query("SELECT * FROM sub_category WHERE cat_id=$cat_id");
				 		if($sub_result->num_rows > 0){ /* if is some result display loop */
							$m.='<ul class=left_popup_dropbox>';
								while($row2=$sub_result->fetch_assoc()){
									$m.='<li><a href="'.URL.'proizvodi/'.$row['cat_id'].'-'.strtolower(str_replace(' ', '_', $row['cat_name'])).'">'.strtoupper($row2['sub_cat_name']).'</a>';

									$m.='</li>';
								}
							$m.='</ul>';
						}
				/* */
				$m.='</li>';
			}
			$m.='</div><!-- div.leftNavMenu -->';
		/* display costructed menu */
		echo $m;
	}

}