<?php

function context_post_filters_function(){



	/* Setting up base $args
	============================================= */
	$args = array(
		'orderby' => 'date', // sort by date
		'order'	=> $_POST['dateorder'] // ASC or DESC
	);




	/* Check isset and fill arrays
	============================================= */
	$categoryfilterdropdown = [];
 	if( isset( $_POST['categoryfilterdropdown'] ) ) {
 		array_push( $categoryfilterdropdown , $_POST['categoryfilterdropdown'] );
 	}

 	$categoryfiltercheckboxes = [];
 	if( isset( $_POST['categoryfiltercheckboxes'] ) ) {
 		$categoryfiltercheckboxes = $_POST['categoryfiltercheckboxes'];
 	}

 	$categoryfilterradios = [];
 	if( isset( $_POST['categoryfilterradios'] ) ) {
 		$categoryfilterradios = $_POST['categoryfilterradios'];
 	}




 	/* Comparative query
	============================================= */
	$args['tax_query'] = array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'category',
			'field' => 'id',
			'terms' => $categoryfilterdropdown,
			'operator' => 'AND'
		),
		array(
			'taxonomy' => 'category',
			'field' => 'id',
			'terms' => $categoryfiltercheckboxes,
			'operator' => 'AND'
		),
		array(
			'taxonomy' => 'category',
			'field' => 'id',
			'terms' => $categoryfilterradios,
			'operator' => 'AND'
		),
	);




 	/* The below examples are if categories were not in several fields
	============================================= */




	/* Dropdown category filter example
	============================================= */
	// if( isset( $_POST['categoryfilterdropdown'] ) ) {
	// 	$args['tax_query'] = array(
	// 		array(
	// 			'taxonomy' => 'category',
	// 			'field' => 'id',
	// 			'terms' => $_POST['categoryfilterdropdown']
	// 		)
	// 	);
	// }




	/* Multi-Checkboxes category filter example
	============================================= */
	// if( isset( $_POST['categoryfiltercheckboxes'] ) ) {

	// 	$checkedArray = $_POST['categoryfiltercheckboxes'];

	// 	$args['tax_query'] = array(
	// 		array(
	// 			'taxonomy' => 'category',
	// 			'field' => 'id',
	// 			'terms' => $checkedArray
	// 		)
	// 	);
	// }
 


 
 	/* Final query and return
	============================================= */
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) {

		while( $query->have_posts() ): $query->the_post();
			echo '<h2>' . $query->post->post_title . '</h2>';
		endwhile;

		wp_reset_postdata();

	} else {

		echo 'No posts found';

	}
 
	die();
}

?>