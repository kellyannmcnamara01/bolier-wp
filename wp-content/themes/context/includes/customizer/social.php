<?php

	function context_social_customizer_section( $wp_customize ){

		/* Social Settings
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
        ============================================= */
		$wp_customize->add_section( 'context_social_section', [
			'title'				=> __( 'Social Settings', 'context' ),
			'priority'			=> 30
		] );



		/* Social Controls
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