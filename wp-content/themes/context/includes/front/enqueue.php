<?php


	function context_enqueue(){
		$uri = get_theme_file_uri();
		$ver = CONTEXT_DEV_MODE ? time() : false;


		/* Styles
		============================================= */
		wp_register_style( 'context_styles', $uri . '/assets/dist/css/main.css', [], $ver );
		wp_register_style( 'context_ie_styles', $uri . '/assets/dist/css/ie-main.css', [], $ver );

		wp_enqueue_style( 'context_styles' );

		?>

		<!--[if lte IE 9]>
			<?php wp_enqueue_style( 'context_ie_styles' ); ?>
		<![endif]-->

		<?php
		
		

		/* Scripts
		============================================= */
		wp_register_script( 'context_scripts', $uri . '/assets/dist/scripts/scripts.js', [], $ver, true );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'context_scripts' );
	}

?>