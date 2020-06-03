<?php 

	/* wp_link_pages() to paginage pages with the "page break" block in the editor into different pages */
	
	$defaults = array(
		'before'			=>	'<div class="post-content__pagination">',
		'after'				=>	'</div>',
		'link_before'		=>	'',
		'link_after'		=>	'',
		'next_or_number'	=>	'number',
		'separator'			=>	' ',
		'nextpagelink'		=>	__( 'Next Page', 'context' ),
		'previouspagelink'	=>	__( 'Previous Page', 'context' ),
		'pagelink'			=>	'%',
		'echo'				=>	1

	);

?>
<?php wp_link_pages( $defaults ); ?>