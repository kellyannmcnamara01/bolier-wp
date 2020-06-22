<section class="posts" style="padding: 30px; background: lightblue; font-size: 16px; color: white;">
	<h2>Posts</h2>

	<?php
		if( have_posts() ){
			echo '<ul class="post-cards">';
				while( have_posts() ){
					the_post();
					get_template_part( 'partials/posts/content-excerpt' );
				}
			echo '</ul>';
		}
	?>

</section>