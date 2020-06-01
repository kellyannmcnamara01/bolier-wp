<?php 
	
	function context_widgets(){
		// * https://codex.wordpress.org/Function_Reference/register_sidebar
		register_sidebar([
			'name'			=>	__( 'Sidebar', 'context' ),
			'id'			=>	'context_sidebar',
			'description'	=>	__( 'Sidebar for Context Boiler Theme', 'context' ),
			'before_widget'	=>	'<div id="%1$s" class="before_widget_class %2$s">',
			'after_widget'	=>	'</div>',
			'before_title'	=>	'<h4>',
			'after_title'	=>	'</h4>'

		]);
	}

?>