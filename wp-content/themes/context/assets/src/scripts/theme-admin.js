(function($){

	/* Useful comment about how to echo .getBlockTypes() to find out the options
	 * https://wordpress.stackexchange.com/questions/352559/remove-block-styles-in-the-block-editor
	 *
	 *
	 	wp.domReady(() => {
		    wp.blocks.getBlockTypes().forEach((block) => {
		        if (_.isArray(block['styles'])) {
		            console.log(block.name, _.pluck(block['styles'], 'name'));
		        }
		    });
		});
	============================================= */
	console.log('theme admin js loaded');





	wp.domReady( () => {

		/* Create four column grid option
		============================================= */
		wp.blocks.registerBlockVariation( 
			'core/columns', { 
				name		: 	'four-column', 
				title		: 	'Four columns; equal spilt', 
				isDefault	: 	true, 
				scope		: 	[ 'block' ],
				innerBlocks	: 	[ 
					[ 'core/column' ], 
					[ 'core/column' ], 
					[ 'core/column' ], 
					[ 'core/column' ] 
				],
				icon		: 	'smiley'
			} 
		);




		/* Remove Button Style Options
		============================================= */
		wp.blocks.unregisterBlockStyle(
			'core/button',
			[ 'default', 'outline', 'fill', 'squared', 'borderRadius' ]
		);

		// wp.blocks.registerBlockStyle(
		// 	'core/button',
		// 	[
		// 		{
		// 			name: 'default',
		// 			label: 'Default',
		// 			isDefault: true,
		// 		},
		// 		{
		// 			name: 'full',
		// 			label: 'Full Width',
		// 		}
		// 	]
		// );




		/* Image Block Style Options
		============================================= */
	    wp.blocks.unregisterBlockStyle(
	    	'core/image', 
	    	['default', 'rounded']
	    );




	    /* Quote Block Style Options
		============================================= */
	    wp.blocks.unregisterBlockStyle(
	    	'core/quote', 
	    	['default', 'large']
	    );




	    /* Pullquote Block Style Options
		============================================= */
	    wp.blocks.unregisterBlockStyle(
	    	'core/pullquote', 
	    	['default', 'solid-color']
	    );




	    /* Separator Block Style Options
		============================================= */
	    wp.blocks.unregisterBlockStyle(
	    	'core/separator', 
	    	['default', 'wide', 'dots']
	    );
	    



	    /* Table Block Style Options
		============================================= */
	    wp.blocks.unregisterBlockStyle(
	    	'core/table', 
	    	['regular', 'stripes']
	    );
	    



	    /* Social Links Block Style Options
		============================================= */
	    wp.blocks.unregisterBlockStyle(
	    	'core/social-links', 
	    	['default', 'logos-only', 'pill-shape']
	    );
	} );


}(jQuery));