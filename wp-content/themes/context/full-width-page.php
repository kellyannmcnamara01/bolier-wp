<?php 
/*
 * Template Name: Full Width Page
 * Template Post Type: Post
 */
?>

<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'post' ); ?>



	<!-- Content
	============================================= -->
	<section id="content" style="padding: 30px; background: chartreuse;">
		<div class="row">

			<!-- Page Content
			============================================= -->
			<main class="post-content col-xs-12" style="background: gold; color: white; padding: 30px; font-size: 16px;">

				<?php
					while( have_posts() ){
						the_post();

						global $post;
						$author_ID		= $post->post_author;
						$author_URL		= get_author_posts_url( $author_ID );

						?>


						<!-- Page Content Content
						============================================= -->
						<div class="post-content__content" style="padding: 30px; background: darkorange;">
							<?php the_content(); ?>

							<!-- wp_link_pages
							============================================= -->
							<?php get_template_part( 'partials/functions/wp-link-pages' ); ?>
							<!-- wp_link_pages [END] -->
							
						</div>
						<!-- Page Content Content [END] -->



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
			<!-- Page Content [END] -->

			
		</div>
	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>