<?php

	echo time();

	function context_enqueue(){
		$uri = get_theme_file_uri();
		$ver = CONTEXT_DEV_MODE ? time() : false;

		// style sheets
		wp_register_style( 'context_google_font', 'https://fonts.googleapis.com/css2?family=Fira+Sans', [], $ver );
		wp_register_style( 'context_styles', $uri . '/assets/src/styles/main.css', [], $ver );

		wp_enqueue_style( 'context_google_font' );
		wp_enqueue_style( 'context_styles' );

		//scripts
		wp_register_script( 'context_scripts', $uri . '/assets/src/scripts/main.js', [], $ver, true );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'context_scripts' );
	}

?>