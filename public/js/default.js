$(document).ready(function(){
	
	/*
	offline */
	var url="http://localhost:8888/projekti/pedja/geooprema/proizvodi?q=";

	/*
	offline 
	var url="http://www.geo-oprema.rs"; */

	/* main_nav nav dropdown box */
	$('.main_nav nav ul li.drop').mouseover(function(){
		$('.main_nav nav ul li ul.dropbox-content').show();
	});
	$('.main_nav nav ul li.drop').mouseout(function(){
		$('.main_nav nav ul li ul.dropbox-content').hide();
	});

	/* serach box */
		/* click on search button */
		$('.searchButton').click(function(){
			var data = $('.jSearch input').val();
			if ( data == '' ) {
				event.preventDefault();
			}
			window.location = url+data;
		});
		/* push enter */
		$('.jSearch input').keydown(function(e){
			var data = $('.jSearch input').val();
			var key = e.which;

			if(key == 13){
				window.location = url+data;
			}else{
				event.preventDefault();			
			}
		});

	/* popup ul box menu */
	$('li.popup_active').mouseover(function(){
		$(this).find('ul.left_popup_dropbox').show();
	});

	$('li.popup_active').mouseout(function(){
		$(this).find('ul.left_popup_dropbox').hide();
	});

});