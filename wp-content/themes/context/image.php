<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'attachment' ); ?>



	<!-- Content
	============================================= -->
	<section id="content" style="padding: 30px; background: papayawhip;">



		<!-- Post Content
		============================================= -->
		<main class="post-content" style="background: sliver; color: white; padding: 30px; font-size: 16px;">

			<?php
				if( have_posts() ){
					while( have_posts() ){
						the_post();

						global $post;
						$author_ID		= $post->post_author;
						$author_URL		= get_author_posts_url( $author_ID );

						?>


						<!-- Post Content Content
						============================================= -->
						<div class="post-content__content" style="padding: 30px; background: rosybrown;">
							<img src="<?php echo $post->guid; ?>" alt="" style="width: 100%;"/>
							<a href="<?php echo $post->guid; ?>" target="_blank">Direct Download</a>
							<?php the_content(); ?>
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