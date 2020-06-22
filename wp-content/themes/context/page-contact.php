<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'post' ); ?>



	<!-- Content
	============================================= -->
	<section id="main-content" style="padding: 30px; background: chartreuse;">


		<div class="row">
			<div class="col-xs-12">
				<form class="row" style="padding: 30px; background: darkviolet; color: #fff;">
					<div class="form-field col-xs-6">
						<label for="name">Name:</label>
						<input type="text" name="name" id="name">
					</div>
					<div class="form-field col-xs-6">
						<label for="email">Email:</label>
						<input type="email" name="email" id="email">
					</div>
					<div class="form-field col-xs-12">
						<fieldset>
							<legend>Checkboxes in fieldset</legend>
							
						</fieldset>
					</div>
				</form>
			</div>
		</div>

		<!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div>




		<div class="row">
			

			<!-- Page Content
			============================================= -->
			<main class="post-content col-xs-8" style="background: gold; color: white; padding: 30px; font-size: 16px;">

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

			<?php get_sidebar(); ?>

			
		</div>

        <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div> 
        
	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>