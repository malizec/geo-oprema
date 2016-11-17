        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>views/slider3/css/style.css" />
		<script type="text/javascript" src="<?php echo URL; ?>views/slider3/js/modernizr.custom.28468.js"></script>

			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Warm welcome</h2>
					<p>
						<div class="da-img"><img src="<?php echo URL; ?>views/slider3/images/slide2.png" alt="image01" /></div>
					</p>
					<a href="#" class="da-link">Read more</a>
					<div class="da-img"><img src="<?php echo URL; ?>views/slider3/images/1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Easy management</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<a href="#" class="da-link">Read more</a>
					<!-- <div class="da-img"><img src="<?php echo URL; ?>views/slider3/images/2.png" alt="image01" /></div> -->
					<div class="da-img"><img src="<?php echo URL; ?>views/slider3/images/slide2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Revolution</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<a href="#" class="da-link">Read more</a>
					<div class="da-img"><img src="<?php echo URL; ?>views/slider3/images/3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Quality Control</h2>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<a href="#" class="da-link">Read more</a>
					<div class="da-img"><img src="<?php echo URL; ?>views/slider3/images/4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>

		<script type="text/javascript" src="<?php echo URL; ?>views/slider3/js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
 				    current     : 0,   
				    // index of current slide
			     
				    bgincrement : 0,  
				    // increment the background position
				    // (parallax effect) when sliding
				     
				    autoplay    : false,
				    // slideshow on / off
				     
				    interval    : 4000 
				    // time between transitions
				     
				});
			});
		</script>	