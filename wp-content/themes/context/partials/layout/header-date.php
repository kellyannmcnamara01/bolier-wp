<div class="header--date" style="background: mediumspringgreen; color: black; padding: 30px; font-size: 30px;">


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
	<p>
		<?php
			/* if( is_year() ){
				?>You are viewing a year archive.<?php
			} else if( is_month() ){
				?>You are viewing a moth archive.<?php
			} else if( is_day() ){
				?>You are viewing a day archive.<?php
			} */
		?>
	</p>



</div>