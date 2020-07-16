<?php


	/* Setup
	============================================= */
	define( 'CONTEXT_DEV_MODE', true );




	/* Includes
	============================================= */
	include( get_theme_file_path( '/includes/front/enqueue.php' ) );
	include( get_theme_file_path( '/includes/front/breadcrumbs.php' ) );
	include( get_theme_file_path( '/includes/setup.php' ) );
	include( get_theme_file_path( '/includes/widgets.php' ) );
	include( get_theme_file_path( '/includes/theme-customizer.php' ) );
	include( get_theme_file_path( '/includes/customizer/social.php' ) );
	include( get_theme_file_path( '/includes/customizer/misc.php' ) );
	include( get_theme_file_path( '/includes/customizer/footer.php' ) );
	include( get_theme_file_path( '/includes/customizer/enqueue.php' ) );
	include( get_theme_file_path( '/includes/front/post-filters.php' ) );
	include( get_theme_file_path( '/includes/front/post-views.php' ) );
	include( get_theme_file_path( '/includes/admin/enqueue.php' ) );




	/* Hooks
	============================================= */
	add_action( 'wp_enqueue_scripts', 'context_enqueue' );
	add_action( 'after_setup_theme', 'context_setup_theme' );
	add_action( 'widgets_init', 'context_widgets' );
	add_action( 'customize_register', 'context_customize_register' );
	add_action( 'customize_preview_init', 'context_customize_preview_init' );
	add_action( 'wp_ajax_post_filter', 'context_post_filters_function' ); // wp_ajax_{ACTION HERE} 
	add_action( 'wp_ajax_nopriv_post_filter', 'context_post_filters_function' ); // wp_ajax_nopriv_{ACTION HERE} 
	add_action( 'admin_init', 'context_editor_styles' );
	add_action( 'enqueue_block_editor_assets', 'context_admin_scripts' );

	// add_action( 'acf/init', 'context_acf_register_blocks' );




	/* Shortcodes
	============================================= */



?>