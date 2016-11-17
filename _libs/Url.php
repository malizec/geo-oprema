<?php

/**
* 
*/
class Url{
	
	function __construct(){
		# code...
	}

	static public function breakUrl($url){
		if(isset($url)){
			$url=explode('/', isset($_GET['url'])?$_GET['url']:null );
			return $url;
		}else{
			return null;
		}
	}

	static public function header_status($location){
		if(!headers_sent()){
			header('location: '.$location);
		}else{
			?>
			<script type="text/javascript">window.location.replace("<?php echo $location; ?>");</script>
			<?php
		}
	}

}