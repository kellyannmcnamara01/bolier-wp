<?php 

	/* Setting up vars
	============================================= */
	$adminAjax 		=	site_url() . '/wp-admin/admin-ajax.php';
	$termsArray		=	array(
		'taxonomy'	=>	'category',
		'orderby' 	=>	'name'
	);

?>



<!-- Dropdown category filter example
============================================= -->
<form action="<?php echo $adminAjax; ?>" method="POST" id="filter">




	<!-- Dropdown categories
	============================================= -->
	<?php

		if( $terms = get_terms( $termsArray ) ) {
 
			echo '<select name="categoryfilterdropdown">';
			echo '<option value="">Select A Category</option>';
			foreach ( $terms as $term ) {
				echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
			}
			echo '</select>';
		}

	?>




	<!-- Multi-checkmark categories
	============================================= -->
	<?php

		if( $terms = get_terms( $termsArray ) ){

			echo '<div>';
			foreach ( $terms as $term ) {
				echo '<label><input type="checkbox" name="categoryfiltercheckboxes[]" value="' . $term->term_id . '" />' . $term->name . '</label>';
			}
			echo '</div>';

		}

	?>




	<!-- Date order dropdown
	============================================= -->
	<select name="dateorder">
		<option value="">Order Date By</option>
		<option value="DESC">Newest</option>
		<option value="ASC">Oldest</option>
	</select>
	



	<button>Apply filter</button>

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
	jQuery(function($){
		$('#filter').submit(function(){
			var filter = $('#filter');

			// var choices = {};

   //          $('input[type=checkbox]:checked').each(function() {
   //              if (!choices.hasOwnProperty(this.name)) 
   //                  choices[this.name] = [this.value];
   //              else 
   //                  choices[this.name].push(this.value);
   //          });

   //          console.log(choices);


			$.ajax({
				url:filter.attr('action'),
				data:filter.serialize(), // form data
				type:filter.attr('method'), // POST
				beforeSend:function(xhr){
					filter.find('button').text('Processing...'); // changing the button label
				},
				success:function(data){
					filter.find('button').text('Apply filter'); // changing the button label back
					$('#response').html(data); // insert data
				}
			});
			return false;
		});
	});
</script>


<section class="posts" style="padding: 30px; background: lightblue; font-size: 16px; color: white;">
	<h2>Posts</h2>
	<?php
		if( have_posts() ){
			while( have_posts() ){
				the_post();
				get_template_part( 'partials/posts/content-excerpt' );
			}
		}
	?>

</section>