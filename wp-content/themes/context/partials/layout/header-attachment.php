<div class="header--attachment" style="background: yellowgreen; color: white; padding: 30px; font-size: 30px;">


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
	<h1><?php echo $post->post_title; ?></h1>	


</div>