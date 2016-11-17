<script src="<?php echo URL; ?>views/unslider/js/unslider.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>views/unslider/css/unslider.css" />

<div class="banner wrap1000">
    <ul>
        <li>
            <img class="banner-img" src="<?php echo URL; ?>views/slider3/images/slide1.png" alt="image01" />
            <div class="bbanner-text">
            </div>
        </li>
        <li>
            <img class="banner-img" src="<?php echo URL; ?>views/slider3/images/slide3.png" alt="image01" />
            <div class="bbanner-text">
            </div>
        </li>
        <li>
        	<img class="banner-img" src="<?php echo URL; ?>views/slider3/images/slide4.png" alt="image01" />
        	<div class="bbanner-text">
            </div>
        </li>
        <li>
        	<img class="banner-img" src="<?php echo URL; ?>views/slider3/images/slide2.png" alt="image01" />
        	<div class="bbanner-text">
            </div>
        </li>
    </ul>
</div>

<script type="text/javascript">
$(function() {
    $('.banner').unslider();
});

</script>