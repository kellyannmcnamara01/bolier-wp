<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'attachment' ); ?>



	<!-- Content
	============================================= -->
	<section id="content" style="padding: 30px; background: pink;">
		<div class="row">

			<!-- Post Content
			============================================= -->
			<main class="post-content col-xs-8" style="background: mistyrose; color: white; padding: 30px; font-size: 16px;">

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
							<div class="post-content__content" style="padding: 30px; background: mediumpurple;">
								<a href="<?php echo $post->guid; ?>" target="_blank">Direct Download</a>
								<p><?php echo $post->post_mime_type; ?></p>
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

			
		</div>
	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>