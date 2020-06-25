<div class="header--category" style="background: lightslategrey; color: white; padding: 30px; font-size: 30px;">


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




	<!-- Title/Desc
    ============================================= -->
	<h1><?php the_archive_title(); ?></h1>
	<p><?php the_archive_description(); ?></p>



</div>