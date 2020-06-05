<!-- Sidebar
============================================= -->
<?php
    if( is_active_sidebar( 'context_sidebar' ) ){ 
    	?>

			<aside class="sidebar col-xs-4" style="background: plum; color: white; padding: 30px; font-size: 16px;">
				<h2>Sidebar</h2>
				<?php

			      if( is_active_sidebar( 'context_sidebar' ) ){
			        dynamic_sidebar( 'context_sidebar' );
			      }

			    ?>
			</aside>

		<?php 
	} 
?>
<!-- .sidebar end -->