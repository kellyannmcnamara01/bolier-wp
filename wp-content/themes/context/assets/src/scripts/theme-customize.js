(function($){



	/* Smoothly Show/Hide Top Bar Search in Customizer
	============================================= */
	wp.customize( 'context_header_show_search', function( val ){
		val.bind( function( new_val ){
			if( new_val ){
				$('.top-bar__search').show();
			} else {
				$('.top-bar__search').hide();
			}
		} );
	} );



	/* Smoothly Show/Hide Back to Top in Customizer
	============================================= */
	wp.customize( 'content_show_top_btn', function( val ){
		val.bind( function( new_val ){
			if( new_val ){
				$('.js--back-to-top').show();
			} else {
				$('.js--back-to-top').hide();
			}
		} );
	} );



}(jQuery));