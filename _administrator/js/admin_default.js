$(document).ready(function(){

	/* old style for dropbox */
	// $('li.drop').on("click", function(){
	// 	$(this).children('ul.dropdown-ul').toggle();
	// });

	/* admin_menu dropbox */

	    var menu_ul = $('.admin_menu > li > ul'),
	           menu_a  = $('.admin_menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	/* */


});