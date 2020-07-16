<?php

	function context_setup_theme(){


		/* Add Theme Support
        ============================================= */




        /* add support for post thumbnails
        ============================================= */
		add_theme_support( 'post-thumbnails' );




		/* add support for wp to manage title tag
		============================================= */
		add_theme_support( 'title-tag' );




		/* add support for custom logo in customizer
		============================================= */
		add_theme_support( 'custom-logo' );




		/* Add Post Type Support
        ============================================= */
		add_post_type_support( 'page', 'excerpt' );




		/*  add support/creation for/of rrs feeds 
		============================================= */
		add_theme_support( 'automatic-feed-links' );




		/*  add support for selective refresh for widgets 
		============================================= */
		add_theme_support( 'customize-selective-refresh-widgets' );




		/*  add support for default block styles 
		============================================= */
		add_theme_support( 'wp-block-styles' );




		/*  add support for resoinsive embeds 
		============================================= */
		add_theme_support( 'responsive-embeds' );




		/*  add support for html 5
		============================================= */
		add_theme_support( 'html5', array( 
			'comment-list', 
			'comment-form', 
			'search-form', 
			'gallery', 
			'caption' 
		) );




		/*  add support for admin editor font sizes  
		 *  these font sizes should match the corresponding classes/vars within the typography style sheet
		 *  --> src/styles/globals/__typography.scss file */
		add_theme_support(
	    	'editor-font-sizes', 
		    array(
		    	array(
		            'name'      => __( 'Small', 'context' ),
		            'shortName' => __( 'S', 'context' ),
		            'size'      => 14,
		            'slug'      => 'small'
		        ),
		        array(
		            'name'      => __( 'Normal', 'context' ),
		            'shortName' => __( 'N', 'context' ),
		            'size'      => 16,
		            'slug'      => 'normal'
		        ),
		        array(
		            'name'      => __( 'Medium', 'context' ),
		            'shortName' => __( 'M', 'context' ),
		            'size'      => 19,
		            'slug'      => 'medium'
		        ),
		        array(
		            'name'      => __( 'Large', 'context' ),
		            'shortName' => __( 'L', 'context' ),
		            'size'      => 24,
		            'slug'      => 'large'
		        ),
		        array(
		            'name'      => __( 'Huge', 'context' ),
		            'shortName' => __( 'H', 'context' ),
		            'size'      => 29,
		            'slug'      => 'huge'
		        )
		    )
		);




		/*  add support for admin editor colour palette  
		 *  these colours should match the corresponding vars within the variables style sheet
		 *  --> src/styles/globals/__variables.scss file
		 * example commented out below:
		 ============================================= */
		// add_theme_support( 
		// 	'editor-color-palette', 
		// 	array(
		// 		array(
		// 			'name'  => __( 'Dark Grey', 'context' ),
		// 			'slug'  => 'darkgrey',
		// 			'color'	=> '#363636',
		// 		),
		// 		array(
		// 			'name'  => __( 'Light Grey', 'context' ),
		// 			'slug'  => 'lightgrey',
		// 			'color' => '#F5F5F5',
		// 		),
		// 	)
		// );




		/*  disable/hide admin editor colour palette
		============================================= */
		add_theme_support( 'editor-color-palette' );




		/* Disable Custom Gradients in Admin Editor
        ============================================= */
		add_theme_support( 'disable-custom-gradients' );
		add_theme_support( 'editor-gradient-presets', array() );




		/* Disable Custom Colour Btn
        ============================================= */
		add_theme_support( 'disable-custom-colors' );




		/* Disable Custom Font Size
        ============================================= */
		add_theme_support( 'disable-custom-font-sizes' );




		/*  add placeholder content when theme is freshly installed & there is no content within the database  */
		add_theme_support( 'starter-content', [
			// widgets: determin what core-defined widgets are displayed
			'widgets'				=> [
				'context_sidebar'	=> [
					'text_business_info', 'search', 'text_about'
				]
			], 
			// attachments: create custom image used as post thumbnails for pages
			'attachments'			=> [
				'placement-image'	=> [
					'post_title'	=> __( 'About', 'context' ),
					'file'			=> '/assets/images/interface/placement-photo.jpg'
				]
			], 
			// posts: specify the core-defined pages to create and add custom humbnails to some of them
			'posts'					=> [
				'home'				=> array(
					'thumbnail'		=> '{{placement-photo}}'
				),
				'about'				=> array(
					'thumbnail'		=> '{{placement-photo}}'
				),
				'contact'				=> array(
					'thumbnail'		=> '{{placement-photo}}'
				),
				'blog'				=> array(
					'thumbnail'		=> '{{placement-photo}}'
				),
				'homepage-section'	=> array(
					'thumbnail'		=> '{{placement-photo}}'
				),
			], 
			// options: default o a static front page and assign the front and post pages
			'options'				=> [
				'show_on_front'		=> 'page',
				'page_on_front'		=> '{{home}}',
				'page_for_posts'		=> '{{blog}}'
			], 
			// theme_mods: set up menus for each of the registered areas in the theme
			'theme_mods'			=> [
				'context_header_show_search'	=> 'yes',
				'content_show_top_btn'			=> 'yes',
				'context_footer_copyright'		=> 'Copyright &copy;',
				'context_fb'					=> 'https://www.facebook.com/',
				'context_ig'					=> 'https://www.instagram.com/',
				'context_li'					=> 'https://www.linkedin.com/',
				'context_tw'					=> 'https://twitter.com/',
				'context_yt'					=> 'https://www.youtube.com/',
				'context_pi'					=> 'https://www.pinterest.ca/',
			],  
			'nav_menus'				=> [
				'primary'			=> array(
					'name'			=> __( 'Primary Menu', 'context' ),
					'items'			=> array(
						'link_home', // note: the core "home" page is actually a link in case static front page is not used
						'page_about',
						'page_blog',
						'page_contact'
					)
				)
			],
		] );




		/* Add Image Crops
        ============================================= */
		add_image_size( 'team-member-card', 368, 265, true );
		add_image_size( 'team-member-card@x2', 736, 530, true );

		add_image_size( 'image-full', 1200);
		add_image_size( 'image-full@x2', 2400);

		add_image_size( 'image-six-col', 600);
		add_image_size( 'image-six-col@x2', 1200);

		add_image_size( 'image-four-col', 400);
		add_image_size( 'image-four-col@x2', 800);

		add_image_size( 'image-three-col', 300);
		add_image_size( 'image-three-col@x2', 600);

		add_image_size( 'isotope-img', 9999, 475);
		add_image_size( 'isotope-img@x2', 9999, 950);




		/* Register Nav Menu
        ============================================= */
		register_nav_menu( 'primary', __( 'Primary Menu', 'context' ) ); // register menu
	}

?>