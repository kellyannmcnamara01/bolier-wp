jQuery(function($) {
	
	// source: https://rudrastyh.com/wordpress/ajax-post-filters.html




	/* How to create a ajaxPostsFilter function
 	 *
	 * 1. create a function
	 * 2. create a var that gets the form by it's id
	 * 3. create an ajax instance and within it:
	 *    -- set the url to the form's action
	 *    -- set the datatype to serialize()
	 *    -- set type to form's method (POST)
	 *    -- set beforeSend to trigger loader of choice
	 *    -- set success to fill div with results by grabbing the id
	 *       IMPORTANT: this will remove all the current content's and replace it with the ajax results
	 * 4. return false after ajax instance
	 * 5. create triggers to call the filter function
	 *    Example: $('#form input').change(function(){YourFilterFunction();});
	============================================= */




	/* ajaxPostsFilter Function
	============================================= */

	function ajaxPostsFilter(){
		var filter = $('#filter');

		$.ajax({

			url		: 	filter.attr('action'),
			data 	: 	filter.serialize(), // form data
			type	: 	filter.attr('method'), // POST

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




	/* Calls for ajaxPostsFilter();
	============================================= */
	
	$("#filter input").change(function(){
		ajaxPostsFilter();
	});

	$("#filter select").change(function(){
		ajaxPostsFilter();
	});
	

});