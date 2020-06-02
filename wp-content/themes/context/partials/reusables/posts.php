<div class="posts" style="padding: 30px; background: lightblue;">

	<?php
		if( have_posts() ){
			while( have_posts() ){
				the_post();
				get_template_part( 'partials/posts/content-excerpt' );
			}
		}
	?>

</div>