<nav class="primary-nav" style="background: lightgreen; color: white; padding: 30px; font-size: 16px;">
	<?php

	    if( has_nav_menu( 'primary' ) ){
	        wp_nav_menu([
	            'theme_location'  =>  'primary',
	            'container'       =>  false, // could be 'div' or 'nav' but false is 'ul'
	            'menu_class'      =>  'menu-class',
	            'fallback_cb'     =>  false,
	            'depth'           =>  1
	        ]);
	    }

	?>
</nav>