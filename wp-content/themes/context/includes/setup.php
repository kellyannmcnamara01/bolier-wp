<?php

	function context_setup_theme(){


		/* Add Theme Support
        ============================================= */
		add_theme_support( 'post-thumbnails' ); // add support for post thumbnails
		add_theme_support( 'title-tag' ); // add support for custom title
		add_theme_support( 'custom-logo' ); // add support for custom logo in customizer
		add_theme_support( 'automatic-feed-links' ); // add support/creation for/of rrs feeds
		add_theme_support( 'html5', array( 
			'comment-list', 
			'comment-form', 
			'search-form', 
			'gallery', 
			'caption' 
		) ); // add support for html 5
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
		] ); // add placeholder content when theme is freshly installed & there is no content within the database



		/* Register Nav Menu
        ============================================= */
		register_nav_menu( 'primary', __( 'Primary Menu', 'context' ) ); // register menu
	}

?>