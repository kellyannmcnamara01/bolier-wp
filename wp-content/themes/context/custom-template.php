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
					
					

				?>

			</main>
			<!-- Page Content [END] -->


		</div>

        <!-- IMPORTANT: include clear float below every row -->
        <div class="clear-float"></div> 

	</section>
	<!-- Content [END] -->

<!-- Footer
============================================= -->
<?php get_footer(); ?>