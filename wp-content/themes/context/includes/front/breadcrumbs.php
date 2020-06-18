<?php


	function breadcrumbs(){




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

					the_category( 'title_li=' );

				} elseif ( is_archive() || is_single() ){

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

					echo '<li>' . the_title() . '</li>';

				}




				/* Static page breadcrumb
				 * set global $post
				 * check if page is a child else echo title
				 * if page is a child get parent link/title
				============================================= */
				if ( is_page() ){

					global $post;

					if ( is_page() && $post->post_parent ) {

						/* Get depth of current page
						 * For each depth get parent id and push to an array and reset $post
						 * Reverse array and loop through each parent breadcumb
						 * Echo out current page title
						============================================= */
						$depth				=		count($post->ancestors);
						$parentArray		=		[];

						for ($x = 1; $x <= $depth; $x++) {
							
							$parentId 		= 		wp_get_post_parent_id( $post->ID );
							array_push( $parentArray, $parentId);
							$post->ID 			=	$parentId;

						}

						$parentArrayReverse = array_reverse($parentArray);

						foreach( $parentArrayReverse as $parent ) {
							$parentUrl		= 		get_permalink( $parent );
							$parentTitle	=		get_the_title( $parent );

							echo '<li><a href="' . $parentUrl . '" class="breadcrumb">' . $parentTitle . '</a></li>';

						}

						echo '<li>' . the_title() . '</li>';


					} else {
						echo '<li>' . the_title() . '</li>';
					}

					wp_reset_query();

				}



			echo '</ul>'; // closing breadcrumbs
		}

	}

?>