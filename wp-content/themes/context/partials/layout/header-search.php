<div class="header--search" style="background: plum; color: white; padding: 30px; font-size: 30px;">

	<!-- Title
    ============================================= -->
    <?php breadcrumbs(); ?>
	<h1 class="search__title js--search__title"><?php _e( 'Search results for:', 'context' ); the_search_query(); ?></h1>

	<!-- Search Form
    ============================================= -->
	<?php get_search_form(); ?>
</div>