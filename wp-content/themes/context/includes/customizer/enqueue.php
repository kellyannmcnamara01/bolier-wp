<?php

	function context_customize_preview_init() {
		wp_enqueue_script(
			'context_theme_customizer',
			get_theme_file_uri( '/assets/src/scripts/theme-customize.js' ),
			[ 'jquery', 'customize-preview' ],
			false,
			true
		);
	}

?>