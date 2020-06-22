jQuery(function($) {
	
	/* Navigation
	============================================= */
	$('.js--top-bar__hamham').click(function(){
		$(this).toggleClass('is-open');
		$('.js--top-bar__mobile-menu').toggleClass('is-showing');
		$('body').toggleClass('is-locked');
	});
	/* Navigation [END] */




	/* Navigation: Levels
	============================================= */
	$('.primary-nav .menu-item').hover(function(){
		$(this).toggleClass('is-open');
		$(this).find('> .sub-menu').slideToggle();
	});
	/* Navigation: Levels [END] */

});