<?php


	function breadcrumbs(){




		/* Breadcrumb separator
		============================================= */
		$separator = ' > ';




		/* If not homepage
		============================================= */
		if ( !is_front_page() ){



			/* Start w/ homepage link
			============================================= */
			echo '<ul class="breadcrumbs">';
				echo '<li><a href="' . get_option('home') . '" class="breadcrumb">';
				bloginfo('name');
				echo '</a></li>';


				/* Category/archive/single post breadcrumb
				 * display category/archive name
				============================================= */
				if ( is_category() || is_single() ){

					echo $separator;
					the_category( 'title_li=' );

				} elseif ( is_archive() || is_single() ){

					echo $separator;

					if ( is_day() ){

						printf( __( '%s', 'text_domain' ), get_the_date() );

					} elseif ( is_month() ) {

						printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );

					} elseif ( is_year() ) {

						printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );

					} else {

						_e( 'Archives', 'context' );

					}

				}




				/* Single post breadcrumb
				============================================= */
				if ( is_single() ){

					echo $separator;
					the_title();

				}




				/* Static page breadcrumb
				 * set global $post
				 * check if page is a child else echo $separator & title
				 * if page is a child get parent link/title
				============================================= */
				if ( is_page() ){

					global $post;

					if ( is_page() && $post->post_parent ) {
						$parentId 		= 		wp_get_post_parent_id( $post );
						$parentUrl		= 		get_permalink( $parentId );
						$parentTitle	=		get_the_title( $parentId );

						echo $separator;
						echo '<li><a href="' . $parentUrl . '" class="breadcrumb">' . $parentTitle . '</a></li>';
						echo $separator;
						the_title();

					} else {
					    echo $separator;
						the_title();
					}

					wp_reset_query();

				}



			echo '</ul>'; // closing breadcrumbs
		}


	}
	

?>