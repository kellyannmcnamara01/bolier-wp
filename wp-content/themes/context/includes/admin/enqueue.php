<?php

	/* Load Admin JS
	============================================= */
	function context_admin_scripts() {

		wp_enqueue_script(
			'context_admin_scripts', 
			get_stylesheet_directory_uri() . '/assets/src/scripts/theme-admin.js', 
			array( 'wp-blocks', 'wp-dom', 'wp-dom-ready' ), 
			filemtime( get_stylesheet_directory() . '/assets/src/scripts/theme-admin.js' ),
			true
		);
	}




	/* Load Admin CSS
	============================================= */
	function context_editor_styles() {

		$uri = get_theme_file_uri();
		$ver = CONTEXT_DEV_MODE ? time() : false;

		wp_register_style( 'context_admin_styles', $uri . '/assets/dist/css/admin-main.css', [], $ver );
		wp_enqueue_style( 'context_admin_styles' );

	}

?>