/* INDEX
=============================================
 * Scroll Throttle
 * On Page Scroll
 * Navigation
 * Top Bar Search
============================================= */


jQuery(document).ready(function($) {




	/* Scroll Throttle
	============================================= */
	// * create and empty var
	var scrollThrottle;

	// * on scroll of window execute code
	$(window).bind('scroll',function(){

		// * check if scrollThrottle is null, if it is execute function and reset to null. do this every 75ms;
		// * throttling will help with the CPU and load time of a website.
		if (!scrollThrottle) {
			scrollThrottle = setTimeout(function(){
				// * call on page scroll function
				onPageScroll();
				scrollThrottle = null;
			},75);
		}
	});
	/* Scroll Throttle [END] */




	/* On Page Scroll
	============================================= */
	// set prev scroll to zero to start
	var previousScroll = 0;
	var topBarHeight = $('.js--top-bar').outerHeight();

	function onPageScroll(){
		var currentScroll = $(this).scrollTop();

		if ($(window).scrollTop() >= topBarHeight) {
			if (currentScroll > previousScroll){
				// scrolling down
				console.log('down');
				$('.js--top-bar').addClass('is-hiding');
			} else {
				// scrolling up
				console.log('up');
				$('.js--top-bar').removeClass('is-hiding');
			}
		} else {
			// at the top
			console.log('top');
			$('.js--top-bar').removeClass('is-hiding');
		}

		previousScroll = currentScroll;
	}

	onPageScroll();
	/* On Page Scroll [END] */




	/* Navigation
	============================================= */

	/* Navigation [END] */




	/* Top Bar Search
	============================================= */
	$('.js--top-bar__search-toggle').click(function(){
		$('.top-bar__search').toggleClass('is-showing');
	});
	/* Top Bar Search [END] */




}); // jQuery(document) [END]