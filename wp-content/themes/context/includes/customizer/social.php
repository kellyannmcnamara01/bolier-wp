<?php

	function context_social_customizer_section( $wp_customize ){

		/* Social Settings
         * For each field you want in the customizer you need to set up an instance
         *
         * $wp_customize->add_setting($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference%5CWP_Customize_Manager%5Cadd_setting
        ============================================= */
		$wp_customize->add_setting( 'context_fb', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_ig', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_li', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_tw', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_yt', [
			'default'			=>	''
		] );

		$wp_customize->add_setting( 'context_pi', [
			'default'			=>	''
		] );



		/* Social Section
         * Create the section which the settings will live
         * The higher the priority the lower in the customize panel list
         * Needs to be called in an add_action( 'customize_register', 'ID' ); to be displayed
         *
         * function mytheme_add_section( $wp_customize ) {
                $wp_customize->add_section($id, $args);
           }
           add_action( 'customize_register', 'mytheme_add_section' );
         *
         * More Info: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section
        ============================================= */
		$wp_customize->add_section( 'context_social_section', [
			'title'				=> __( 'Social Settings', 'context' ),
			'priority'			=> 30,
            'panel'             => 'context-panel'
		] );



		/* Social Controls
         * Create the input fields for the settings to allow customization
         * Default 'type' is text
         * 
         * $wp_customize->add_control($id, $args);
         *
         * More Info: https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
        ============================================= */
		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_social_fb_input',
			array(
				'label'			=> __( 'Facebook URL', 'context' ),
				'section'		=> 'context_social_section',
				'settings'		=> 'context_fb',
				'type'			=> 'url'
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_social_ig_input',
			array(
				'label'			=> __( 'Instagram URL', 'context' ),
				'section'		=> 'context_social_section',
				'settings'		=> 'context_ig',
				'type'			=> 'url'
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_social_li_input',
			array(
				'label'			=> __( 'LinkedIn URL', 'context' ),
				'section'		=> 'context_social_section',
				'settings'		=> 'context_li',
				'type'			=> 'url'
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_social_tw_input',
			array(
				'label'			=> __( 'Twitter URL', 'context' ),
				'section'		=> 'context_social_section',
				'settings'		=> 'context_tw',
				'type'			=> 'url'
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_social_yt_input',
			array(
				'label'			=> __( 'YouTube URL', 'context' ),
				'section'		=> 'context_social_section',
				'settings'		=> 'context_yt',
				'type'			=> 'url'
			)
		) );

		$wp_customize->add_control( new WP_Customize_Control(
			$wp_customize,
			'context_social_pi_input',
			array(
				'label'			=> __( 'Pinterest URL', 'context' ),
				'section'		=> 'context_social_section',
				'settings'		=> 'context_pi',
				'type'			=> 'url'
			)
		) );
	}

?>