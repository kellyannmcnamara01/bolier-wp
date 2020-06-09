<div class="top-bar js--top-bar" style="background: green; color: white; font-size: 30px;">
	<div class="wrapper">
		<div class="row">
			<!-- Logo
		    ============================================= -->
			<div class="top-bar__logo col-xs-3">
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
		    <div class="col-xs-6">
		    	<div class="in-mobile">
		    		<button tabindex="0" class="top-bar__hamham js--top-bar__hamham" id="hamham">
		    			<span><span class="e-reader-only">Open/close menu</span></span>
		    			<span></span>
		    			<span></span>
		    			<span></span>
		    		</button>
		    		<label for="hamham" class="top-bar__hamham-label">Menu</label>
		    	</div>
		    	<div class="in-desktop">
					<?php get_template_part( 'partials/layout/primary-nav' ); ?>
				</div>
			</div>



			<!-- Top Bar Search
		    ============================================= -->
		    <div class="col-xs-3">
		    	<button class="top-bar__search-toggle js--top-bar__search-toggle"><span role="img" aria-label="open search panel">[search icon placement]</span></button>
		    </div>
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

		<!-- IMPORTANT: include clear float below every row -->
		<div class="clear-float"></div>
		
	</div>
</div>

<div class="top-bar__page-padding-top"></div>

<div class="in-mobile">
	<div class="top-bar__mobile-menu js--top-bar__mobile-menu">
		<?php get_template_part( 'partials/layout/primary-nav' ); ?>
	</div>
</div>