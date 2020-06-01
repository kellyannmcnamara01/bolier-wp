<?php

	function context_setup_theme(){
		// * https://developer.wordpress.org/reference/functions/register_nav_menu/
		register_nav_menu( 'primary', __( 'Primary Menu', 'context' ) );
	}

?>