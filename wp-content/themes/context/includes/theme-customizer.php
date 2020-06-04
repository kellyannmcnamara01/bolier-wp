<?php

	function context_customize_register( $wp_customize ){
		$wp_customize->add_panel( 'context-panel', [
			'title'				=>	__( 'Context Custom Panel', 'context' ),
			'description'		=> 
		] );

		context_social_customizer_section( $wp_customize );
		context_misc_customizer_section( $wp_customize );
	}

?>