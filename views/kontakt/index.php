<div class="contact wrap1000">
	<div class="contact_info">
		<ul class="contact_info_text float_left">
			<li>KONTAKT INFO</li><br/>
			<li>GEO OPREMA doo</li>
			<li>Jelasnica bb, 18206</li>
			<li>Niska banja</li>
			<li>Srbija</li><br/>
			<li>Mobilni: 065/ 9 649 178</li>
			<br/>
			<li>Email: office@geo-oprema.rs</li>
		</ul>
		<div class="form float_right">
				<?php
				if(isset($_GET['a']) && $_GET['a']=='sendMail'){
					View::render('email/sendMail');
				}else{
				?>
				<form method="post" action="<?php echo URL; ?>kontakt?a=sendMail">
					<input type="name" name="name" placeholder="Ime" /><br/>
					<input type="email" name="email" placeholder="E-mail" /><br/>
					<textarea name="formMessage" placeholder="Poruka" ></textarea><br/>
					<input type="submit" name="submit" value="Send"/>
					<?php	
					}
					?>
				</form>
		</div>
		<div class="clear"></div>
	</div>
	<img src="<?php echo PUBLICURL; ?>images/contact/kontakt.jpg" alt="GEOOPREMA KONTAKT" width="1000">
</div>