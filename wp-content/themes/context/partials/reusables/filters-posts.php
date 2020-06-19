<?php 

	/* Setting up vars
	============================================= */
	$adminAjax 			=	site_url() . '/wp-admin/admin-ajax.php';
	
	$termsArray			=	array(
		'taxonomy'		=>	'category',
		'orderby' 		=>	'name',
		'parent' 		=> 	0
	);
	
	$termsColourArray	=	array(
		'taxonomy'		=>	'category',
		'orderby' 		=>	'name',
		'parent' 		=> 	19
	);
	
	$termsPlacesArray	=	array(
		'taxonomy'		=>	'category',
		'orderby' 		=>	'name',
		'parent' 		=> 	14
	);

?>



<!-- Dropdown category filter example
============================================= -->
<form action="<?php echo $adminAjax; ?>" method="POST" id="filter">




	<!-- Dropdown categories
	============================================= -->
	<?php

		if( $terms = get_terms( $termsArray ) ) {
 
			echo '<div>Select General Category</div><select name="categoryfilterdropdown">';
			echo '<option value="">Select a Category</option>';
			foreach ( $terms as $term ) {
				echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
			}
			echo '</select><br><br>';
		}

	?>




	<!-- Multi-checkmark categories
	============================================= -->
	<?php

		if( $terms = get_terms( $termsColourArray ) ){

			echo '<div><div>Select a Colour</div>';
			foreach ( $terms as $term ) {
				echo '<label><input type="checkbox" name="categoryfiltercheckboxes[]" value="' . $term->term_id . '" />' . $term->name . '</label>';
			}
			echo '</div><br><br>';

		}

	?>




	<!-- Multi-radio categories
	============================================= -->
	<?php

		if( $terms = get_terms( $termsPlacesArray ) ){

			echo '<div><div>Select a Location</div>';
			foreach ( $terms as $term ) {
				echo '<label><input type="radio" name="categoryfilterradios[]" value="' . $term->term_id . '" />' . $term->name . '</label>';
			}
			echo '</div><br><br>';

		}

	?>




	<!-- Date order dropdown
	============================================= -->
	<select name="dateorder">
		<option value="">Order Date By</option>
		<option value="DESC">Newest</option>
		<option value="ASC">Oldest</option>
	</select>
	



	<span></span>

	<!-- Hidden input to connect to functions.php -> add_action()
	============================================= -->
	<input type="hidden" name="action" value="post_filter">


</form>

<div id="response" style="padding: 50px; background: coral;">
	<?php
		if( have_posts() ){
			echo '<ul>';
			while( have_posts() ){
				the_post();
				echo '<li>' . the_title() . '</li>';
			}
			echo '</ul>';
		}
	?>
</div>


<script>
	// source: https://rudrastyh.com/wordpress/ajax-post-filters.html
	jQuery(function($){
		function ajaxPostsFilter(){
			var filter = $('#filter');

			$.ajax({
				url:filter.attr('action'),
				data:filter.serialize(), // form data
				type:filter.attr('method'), // POST
				beforeSend:function(xhr){
					filter.find('span').text('Processing...');
				},
				success:function(data){
					filter.find('span').text('Results'); 
					$('#response').html(data); // insert data
				}
			});
			return false;
		}

		$("#filter input").change(function(){
			ajaxPostsFilter();
		});

		$("#filter select").change(function(){
			ajaxPostsFilter();
		});
	});
</script>