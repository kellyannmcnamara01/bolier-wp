/* INDEX
=============================================
 * Scroll Throttle
 * On Page Scroll
 * Top Bar Search
 * Back to Top
 * Accordion
 * Accessible Cards
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

			$('.js--back-to-top').addClass('is-showing');

			if (currentScroll > previousScroll){
				// scrolling down
				$('.js--top-bar').addClass('is-hiding');
			} else {
				// scrolling up
				$('.js--top-bar').removeClass('is-hiding');
			}


		} else {
			// at the top
			$('.js--back-to-top').removeClass('is-showing');
			$('.js--top-bar').removeClass('is-hiding');
		}

		previousScroll = currentScroll;
	}

	onPageScroll();
	/* On Page Scroll [END] */




	/* Top Bar Search
	============================================= */
	$('.js--top-bar__search-toggle').click(function(){
		$('.top-bar__search').toggleClass('is-showing');
	});
	/* Top Bar Search [END] */




	/* Back to Top
	============================================= */
	$('.js--back-to-top').click(function(e){
		e.preventDefault();
		
		$('body,html').animate({
            scrollTop: 0
        }, 350);

		//accessibility for tabbing
        $(this).removeAttr('tabindex');
	    $('body,html').prop('tabindex', '0');
	    $('body,html').focus();

	    setTimeout(function(){
			$('body,html').removeAttr('tabindex');
		}, 1000);
	});
	/* Back to Top [END] */




	/* Accordion
	============================================= */
	$('.js--accordion__trigger').click(function(){
		var currentState = $(this).attr('aria-expanded'),
			ariaControls = $(this).attr('aria-controls'),
			panel = $('.accordion__panel[id="' + ariaControls + '"]');

		if( currentState == 'false' ){
			$(this).addClass('is-open');
			$(this).attr('aria-expanded', 'true');

			panel.addClass('is-open');
			panel.removeAttr('hidden');
			panel.attr('aria-hidden', 'false');
			panel.attr('focusable', 'true');
		} else {
			$(this).removeClass('is-open');
			$(this).attr('aria-expanded', 'false');

			panel.removeClass('is-open');
			panel.attr('hidden', 'hidden');
			panel.attr('aria-hidden', 'true');
			panel.attr('focusable', 'false');
		}
	});
	/* Accordion [END] */




	/* Accessible Cards
	============================================= */
	$('.js--accessible-card').click(function(){

		var cardId = $(this).attr('id'),
			accessibleCardLink = $('.accessible-card__link[accessible-card-link="' + cardId + '"]'),
			accessibleCardLocation = accessibleCardLink.attr('href'),
			isTextSelected = window.getSelection().toString();

		if ( !isTextSelected ){
			location.href = accessibleCardLocation;
		}
	});

	$('.js--accessible-card__link').focus(function(){

		var cardId = $(this).attr('accessible-card-link'),
			accessibleCard = $('.accessible-card[id="' + cardId + '"]');

		accessibleCard.addClass('is-focused');
	});

	$('.js--accessible-card__link').focusout(function(){

		var cardId = $(this).attr('accessible-card-link'),
			accessibleCard = $('.accessible-card[id="' + cardId + '"]');

		accessibleCard.removeClass('is-focused');
	});
	/* Accessible Cards [END] */




	/* Smooth Scroll
	============================================= */
	$('[scroll]').click(function(e){
		e.preventDefault();
		var scrollTo = $(this).attr('scroll');

		$('html, body').animate({
	        scrollTop: $('#' + scrollTo).offset().top
	    }, 500);

		//accessibility for tabbing
	    $(this).removeAttr('tabindex');
	    $('[id="' + scrollTo  + '"]').prop('tabindex', '0');
	    $('[id="' + scrollTo  + '"]').focus();

	    setTimeout(function(){
			$('[id="' + scrollTo  + '"]').removeAttr('tabindex');
		}, 1000);
	});
	/* Smooth Scroll [END] */





}); // jQuery(document) [END]