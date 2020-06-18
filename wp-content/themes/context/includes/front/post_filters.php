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
	// $categoryfilterdropdown = [];
 // 	if( isset( $_POST['categoryfilterdropdown'] ) ) {
 // 		$categoryfilterdropdown = $_POST['categoryfilterdropdown'];
 // 	}

 // 	$categoryfiltercheckboxes = [];
 // 	if( isset( $_POST['categoryfiltercheckboxes'] ) ) {
 // 		$categoryfiltercheckboxes = $_POST['categoryfiltercheckboxes'];
 // 	}

 // 	$terms = array_merge( $categoryfilterdropdown, $categoryfiltercheckboxes );

 // 	print_r($terms);

 // 	$args['tax_query'] = array(
	// 	array(
	// 		'taxonomy' => 'category',
	// 		'field' => 'id',
	// 		'terms' => $terms
	// 	)
	// );



	/* Dropdown category filter example
	============================================= */
	if( isset( $_POST['categoryfilterdropdown'] ) ) {
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilterdropdown']
			)
		);
	}




	/* Multi-Checkboxes category filter example
	============================================= */
	if( isset( $_POST['categoryfiltercheckboxes'] ) ) {

		$checkedArray = $_POST['categoryfiltercheckboxes'];

		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $checkedArray
			)
		);
	}
 
 
	// if post thumbnail is set
	// if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
	// 	$args['meta_query'][] = array(
	// 		'key' => '_thumbnail_id',
	// 		'compare' => 'EXISTS'
	// 	);
	// if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox
 
	$query = new WP_Query( $args );
 
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			echo '<h2>' . $query->post->post_title . '</h2>';
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
 
	die();
}

?>