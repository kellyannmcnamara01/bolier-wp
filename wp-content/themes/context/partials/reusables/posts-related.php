<section class="related-posts" style="background: darkorchid; color: white; padding: 30px; font-size: 16px;">
							
	<h2>Related Posts</h2>
	
	<?php

		$categories	= get_the_category();
		$rp_query	= new WP_Query([
			'posts_per_page'		=>	2,
			'posts__not_in'			=>	[ $post->ID ],
			'cat'					=>	!empty( $categories ) ? $categories[0]->term_id : null
		]);


		if( $rp_query->have_posts() ){
			while( $rp_query->have_posts() ){
				$rp_query->the_post();

				?>

					<div class="related-post" style="padding: 30px; margin-bottom: 10px; background: lavender; color: darkorchid;">
						<?php
							if( has_post_thumbnail() ){
								?>
									<a href="<?php the_permalink(); ?>" class="related-post__image">
										<?php the_post_thumbnail( 'thumbnail' ); ?>
									</a>
								<?php
							}
						?>
						<a href="<?php the_permalink(); ?>" class="related-post__title"><?php the_title(); ?></a>
						<span class="related-post__date"><?php echo get_the_date(); ?></span>
						<span class="related-post__comments"><?php comments_number( '0' ); ?></span>
						<span class="related-post__excerpt"><?php the_excerpt() ?></span>
						<a href="<?php the_permalink(); ?>" class="related-post__read-more">Read More</a>
					</div>

				<?php
			}

			wp_reset_postdata();
		}
	?>

</section>