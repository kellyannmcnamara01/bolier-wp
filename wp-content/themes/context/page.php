<?php /* for single custom post types only */ ?>

<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'post' ); ?>



	<!-- Content
	============================================= -->
	<section id="content" style="padding: 30px; background: chartreuse;">



		<!-- Post Content
		============================================= -->
		<main class="post-content" style="background: gold; color: white; padding: 30px; font-size: 16px;">

			<?php
				while( have_posts() ){
					the_post();

					global $post;
					$author_ID		= $post->post_author;
					$author_URL		= get_author_posts_url( $author_ID );

					?>


					<!-- Post Content Content
					============================================= -->
					<div class="post-content__content" style="padding: 30px; background: darkorange;">
						<?php the_content(); ?>

						<!-- wp_link_pages
						============================================= -->
						<?php get_template_part( 'partials/functions/wp-link-pages' ); ?>
						<!-- wp_link_pages [END] -->
						
					</div>
					<!-- Post Content Content [END] -->



					<!-- Comments
					============================================= -->
					<?php 
						if( comments_open() || get_comments_number() ){
							comments_template(); 
						}
					?>
					<!-- Comments [END] -->

					<?php
				}

			?>

		</main>
		<!-- Post Content [END] -->

		<?php get_sidebar(); ?>

	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>