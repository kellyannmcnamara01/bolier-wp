<?php /* for single custom post types only */ ?>

<!-- Head
============================================= -->
<?php get_header(); ?>


	<!-- Header
    ============================================= -->
    <?php get_template_part( 'partials/layout/header', 'post' ); ?>



	<!-- Content
	============================================= -->
	<section id="main-content" style="padding: 30px; background: lightpink;">
		
		<div class="row">


			<!-- Post Content
			============================================= -->
			<main class="post-content col-xs-8" style="background: orchid; color: white; padding: 30px; font-size: 16px;">

				<?php
					if( have_posts() ){
						while( have_posts() ){
							the_post();

							global $post;
							$author_ID		= $post->post_author;
							$author_URL		= get_author_posts_url( $author_ID );

							?>

							<!-- Post General Infromation
							============================================= -->
							<div id="post-<?php the_ID(); ?>" <?php post_class( 'post-content__general-info' ); ?> style="padding: 30px; background: lightsalmon;">
								<span class="post-content__date"><?php echo get_the_date(); ?></span>
								<div class="post-content__categories"><?php the_category(); ?></div>
								<span class="post-content__comment-count"><?php comments_number( '0' ); ?></span>
								<a href="<?php $author_URL; ?>" class="post-content__author"><?php the_author(); ?></a>
								<div class="post-content__tags"><?php the_tags( '', ' | ' ); ?></div>

								<?php if( has_post_thumbnail() ) { ?>
									<div class="post-content__image">
										<a href="<?php the_permalink(); ?>">
										<?php 
											the_post_thumbnail( 'medium', [ 
												'class' => 'post-thumbnail-class' 
											] ); 
										?>
										</a>
									</div>
								<?php } ?>
							</div>
							<!-- Post General Infromation [END] -->



							<!-- Post Content Content
							============================================= -->
							<div class="post-content__content" style="padding: 30px; background: palevioletred;">
								<?php the_content(); ?>

								<!-- wp_link_pages
								============================================= -->
								<?php get_template_part( 'partials/functions/wp-link-pages' ); ?>
								<!-- wp_link_pages [END] -->

							</div>
							<!-- Post Content Content [END] -->


							<!-- Tags
							============================================= -->
							<?php get_template_part( 'partials/reusables/tags' ); ?>
							<!-- Tags [END] -->



							<!-- Author Card
							============================================= -->
							<?php get_template_part( 'partials/reusables/author-card' ); ?>
							<!-- Author Card [END] -->



							<!-- Pagination
							============================================= -->
							<?php get_template_part( 'partials/reusables/pagination-post' ); ?>
							<!-- Pagination [END] -->



							<!-- Related Posts 
							============================================= -->
							<?php get_template_part( 'partials/reusables/posts', 'related' ); ?>



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

        <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div> 

	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>