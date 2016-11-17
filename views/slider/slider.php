    <link rel='stylesheet' id='camera-css'  href='<?php echo SLIDER; ?>css/camera.css' type='text/css' media='all'> 
    <script type='text/javascript' src='<?php echo SLIDER; ?>scripts/jquery.min.js'></script>
    <script type='text/javascript' src='<?php echo SLIDER; ?>scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php echo SLIDER; ?>scripts/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='<?php echo SLIDER; ?>scripts/camera.min.js'></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true,
                height: '410px'
			});
		});
	</script>  
	<div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="<?php echo SLIDER; ?>images/slides/thumbs/img1.png" data-src="<?php echo SLIDER; ?>images/slides/img1.png">
                <div class="camera_caption fadeFromBottom">
                    HTZ oprema i licna zastitna oprema <em>Patrol PM</em>
                </div>
            </div>
            <div data-thumb="<?php echo SLIDER; ?>images/slides/thumbs/img2.png" data-src="<?php echo SLIDER; ?>images/slides/img2.png">
                <div class="camera_caption fadeFromBottom">
                    HTZ oprema i licna zastitna oprema <em>Patrol PM</em>
                </div>
            </div>
            <div data-thumb="<?php echo SLIDER; ?>images/slides/thumbs/img3.png" data-src="<?php echo SLIDER; ?>images/slides/img3.png">
                <div class="camera_caption fadeFromBottom">
                    HTZ oprema i licna zastitna oprema <em>Patrol PM</em>
                </div>
            </div>
           </div><!-- #camera_wrap_1 -->
 </div><!-- .fluid_container -->