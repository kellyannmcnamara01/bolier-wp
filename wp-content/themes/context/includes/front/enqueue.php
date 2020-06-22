<?php


	function context_enqueue(){
		$uri = get_theme_file_uri();
		$ver = CONTEXT_DEV_MODE ? time() : false;


		/* Styles
		============================================= */
		wp_register_style( 'context_icon_styles', $uri . '/assets/fonts/icomoon/style.css', [], $ver );
		wp_register_style( 'context_styles', $uri . '/assets/dist/css/main.css', [], $ver );
		wp_register_style( 'context_ie_styles', $uri . '/assets/dist/css/ie-main.css', [], $ver );

		wp_enqueue_style( 'context_icon_styles' );
		wp_enqueue_style( 'context_styles' );

		/* IE Check <=9 */
		/* source: https://stackoverflow.com/questions/5302302/php-if-internet-explorer-6-7-8-or-9 */
		if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 9) {
			wp_enqueue_style( 'context_ie_styles' );
		}
		
		

		/* Scripts
		============================================= */
		wp_register_script( 'context_scripts', $uri . '/assets/dist/js/scripts.js', [], $ver, true );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'context_scripts' );
	}

?>