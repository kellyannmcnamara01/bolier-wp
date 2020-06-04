<?php

    	function context_misc_customizer_section( $wp_customize ){

		/* Social Settings
        ============================================= */
    	$wp_customize->add_setting( 'context_header_show_search', [
    	   'default'			=>	'yes',
           'transport'          =>  'postMessage'
    	] );

    	$wp_customize->add_setting( 'context_footer_copyright', [
    		'default'			=>	'Copyright &copy; 2020 All Rights Reserved'
    	] );

    	$wp_customize->add_setting( 'context_footer_tos_page', [
    		'default'			=>	0
    	] );

    	$wp_customize->add_setting( 'context_footer_privacy_page', [
    		'default'			=>	0
    	] );



		/* Social Section
        ============================================= */
        $wp_customize->add_section( 'context_misc_section', [
        	'title'				=>	__( 'Miscellaneous Settings', 'context' ),
        	'priority'			=>	30,
            'panel'             => 'context-panel'
        ] );



        /* Social Controls
        ============================================= */
        $wp_customize->add_control( new WP_Customize_Control(
        	$wp_customize,
        	'context_header_show_search_input',
        	array(
        		'label'			=>	__( 'Show search in top bar', 'context' ),
        		'section'		=>	'context_misc_section',
        		'settings'		=>	'context_header_show_search',
        		'type'			=>	'checkbox',
        		'choices'		=>	[
        			'yes'		=>	'Yes'
        		]
        	)
        ) );

        $wp_customize->add_control( new WP_Customize_Control(
        	$wp_customize,
        	'context_footer_copyright_input',
        	array(
        		'label'			=>	__( 'Footer Copyright', 'context' ),
        		'section'		=>	'context_misc_section',
        		'settings'		=>	'context_footer_copyright',
        		'type'			=>	'text'
        	)
        ) );

        $wp_customize->add_control( new WP_Customize_Control(
        	$wp_customize,
        	'context_footer_tos_page_input',
        	array(
        		'label'			=>	__( 'Terms of Service Page', 'context' ),
        		'section'		=>	'context_misc_section',
        		'settings'		=>	'context_footer_tos_page',
        		'type'			=>	'dropdown-pages'
        	)
        ) );

        $wp_customize->add_control( new WP_Customize_Control(
        	$wp_customize,
        	'context_footer_privacy_page_input',
        	array(
        		'label'			=>	__( 'Privacy Policy Page', 'context' ),
        		'section'		=>	'context_misc_section',
        		'settings'		=>	'context_footer_privacy_page',
        		'type'			=>	'dropdown-pages'
        	)
        ) );
	}

?>