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



}(jQuery));