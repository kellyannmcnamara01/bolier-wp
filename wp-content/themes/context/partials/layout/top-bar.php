<div class="top-bar" style="background: green; color: white; padding: 30px; font-size: 30px;">
	top bar

	<!-- Logo
    ============================================= -->
	<div class="top-bar__logo">
		<?php

			if( has_custom_logo() ){
				the_custom_logo();
			} else {
				?>
					<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php
			}

		?>
	</div>
	<!-- Logo [END] -->



	<!-- Primary Nav
    ============================================= -->
	<?php get_template_part( 'partials/layout/primary-nav' ); ?>



	<!-- Top Bar Search
    ============================================= -->
    <?php

    	if( get_theme_mod( 'context_header_show_search' ) ){
    		?>
	    		<div class="top-bar__search">
			    	<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

				    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				        <div class="form-field">
				            <input 
				                type="search" 
				                id="<?php echo $unique_id; ?>" 
				                class="search-form__field" 
				                name="s"
				                value="<?php the_search_query(); ?>"
				                placeholder="<?php _e( 'Search', 'udemy' ); ?>"/>
				            <button type="submit" class="btn btn--submit">Search</button>
				        </div>
				    </form>
			    </div>
    		<?php
    	}

    ?>
    <!-- Top Bar Search -->

</div>