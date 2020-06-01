<?php


	// setup
	define( 'CONTEXT_DEV_MODE', true );


	// includes
	include( get_theme_file_path( '/includes/front/enqueue.php' ) );
	include( get_theme_file_path( '/includes/setup.php' ) );
	include( get_theme_file_path( '/includes/widgets.php' ) );


	// hooks
	add_action( 'wp_enqueue_scripts', 'context_enqueue' );
	add_action( 'after_setup_theme', 'context_setup_theme' );
	add_action( 'widgets_init', 'context_widgets' );


	// shortcodes



?>