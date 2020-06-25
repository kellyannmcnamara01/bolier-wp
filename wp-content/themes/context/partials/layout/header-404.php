<div class="header header--404" style="background: grey; color: white; padding: 30px; font-size: 30px;">

	<!-- Breadcrumbs
    ============================================= -->
    <div class="row">
    	<div class="col-xs-12">
    		<?php 

			    if( is_front_page() ) {
			    	echo '<ul class="breadcrumbs"><li>';
			    	echo get_bloginfo( 'name' );
			    	echo '</li></ul>';
			    } else {
			    	breadcrumbs();
			    } 

		    ?>
    	</div>
    </div>


    

	<!-- Title
    ============================================= -->
	<h1><?php _e( '404', 'context' ); ?></h1>


	<!-- Search Form
    ============================================= -->
	<?php get_search_form(); ?>
</div>