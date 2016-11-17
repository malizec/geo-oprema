	<div class="clear"></div>
    </div> <!-- div.main_content -->
  </div><!-- div#content -->

  <footer>
    <div id="footer_box">
				<div class="box_content wrap1000">
					<div class="box_content_30 menu float_left">
						<ul>
							<?php //Menu::footerNav(); ?>
							<li class="title">FOOTER MENU</li><br/>
							<li class="links"><a href="<?php echo URL; ?>">POCETNA</a></li>
							<li class="links"><a href="<?php echo URL; ?>proizvodi">PROIZVODI</a></li>
							<li class="links"><a href="<?php echo URL; ?>softver">SOFTVER</a></li>
							<li class="links"><a href="<?php echo URL; ?>novosti">NOVOSTI</a></li>
							<li class="links"><a href="<?php echo URL; ?>kontakt">KONTAKT</a></li>
						</ul>
					</div><!-- div.box_content_30 -->
					<div class="box_content_30 contact float_left">
						<ul class="adress_box">
							<li class="title">KONTAKT INFO</li>
							<li class="firm_name">GEO OPREMA doo</li><br/>
							<li><a href="https://www.facebook.com/pedjaeskobar" target="_blank" alt="Predrag Jovanovic Facebook Page">Predrag Jovanovic</a></li><br/>
							<li>Jelasnica bb, 18206</li>
							<li>Niska banja</li>
							<li>Srbija</li><br/>
							<li class="contact_tel">+381(0)65 96 49 178</li>
						</ul>
						<ul class="social_box">
							<li><br/><br/></li>
							<li class="float_left">
								<a href="https://www.facebook.com/geodetski.pribor">
									<img src="<?php echo PUBLICURL; ?>images/sprite/social/color/facebook.png" width="40" title="Facebook Page">
								</a>
							</li>
							<li class="float_left">
								<a href="#">
									<img src="<?php echo PUBLICURL; ?>images/sprite/social/color/youtube.png" width="40" title="USKORO">
								</a>
							</li>
							<li class="float_left">
								<a href="https://plus.google.com/106873032344518712815/posts">
									<img src="<?php echo PUBLICURL; ?>images/sprite/social/color/google.png" width="40" title="Google+">
								</a>
							</li>
							<li class="float_left">
								<a href="#">
									<img src="<?php echo PUBLICURL; ?>images/sprite/social/color/linkedin.png" width="40" title="USKORO">
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/geodetski.pribor">
									<div class="fb-follow" data-href="https://www.facebook.com/geodetski.pribor" data-width="300" data-colorscheme="light" data-layout="standard" data-show-faces="true"></div>
								</a>
							</li>
							<li class="clear"></li>
						</ul>
					</div><!-- div.box_content_30 -->
					<div class="box_content_30 quick-form float_left">
						<?php
						if(isset($_GET['a']) && $_GET['a']=='sendMail'){
							View::render('email/sendMail');
						}
						?>
						<form method="post" action="<?php echo URL; ?>kontakt?a=sendMail">
							<input type="name" name="name" width="500" placeholder="Ime" /><br/>
							<input type="email" name="email" width="500" placeholder="E-mail" /><br/>
							<textarea name="formMessage" placeholder="Poruka" cols="20"></textarea><br/>
							<input type="submit" name="submit" value="Send"/>
						</form>
					</div><!-- div.box_content_30 -->
					<div class="clear"></div>

    </div><!-- footer_box -->
    <hr/>
    <div class="page_footer_info">
    	<div class=" wrap1000 center-align">
    		<div>Copyright <?php echo date('Y'); ?> | GeoOprema doo Nis Srbija</span> | <span>Created by <a href="http://malizec.netne.net" target="_blank" title="designed and coded by Nenad Cvetkovic">Nenad Cvetkovic</a></div>
   		</div>
    </div>
  </footer><!-- footer -->

</div><!-- div#all -->
</body>
</html>
