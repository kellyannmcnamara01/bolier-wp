<div style="background: green; color: white; padding: 30px; font-size: 30px;">
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

</div>