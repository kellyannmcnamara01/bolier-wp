<!-- Sidebar
============================================= -->
<?php
    if( is_active_sidebar( 'context_sidebar' ) ){ 
    	?>

    		<h2>Sidebar</h2>
			<aside class="sidebar" style="background: plum; color: white; padding: 30px; font-size: 16px;">
				<div class="sidebar__search">
					<h3>Search</h3>
					<?php

				      if( is_active_sidebar( 'context_sidebar' ) ){
				        dynamic_sidebar( 'context_sidebar' );
				      }

				    ?>
				</div>
			</aside>

		<?php 
	} 
?>
<!-- .sidebar end -->