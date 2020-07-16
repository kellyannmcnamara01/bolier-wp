<?php

	function context_acf_register_blocks(){

		/* Register ACF Blocks
		 *
		 * license: b3JkZXJfaWQ9ODQ3MTl8dHlwZT1wZXJzb25hbHxkYXRlPTIwMTYtMDYtMzAgMTY6MDU6NTQ=
		 *
		 * Read more about acf_register_block_type() 
		 * -> https://www.advancedcustomfields.com/resources/acf_register_block_type/
		 *
		 * Example: 
		 *	 acf_register_block_type(
	     *   	array(
	     *   		'name' => 'blockname',
	     *   		'title' => __('Block Name'),
	     *   		'description' => __('Block Description.'),
	     *   		'category' => 'embed',
	     *   		'icon' => '<svg code placement of icon>',
	     *   		'keywords' => array('quote', 'mention', 'cite'),
	     *   		'post_types' => array('post', 'page'),
	     *   		'mode' => 'preview',
	     *   		'align' => 'full',
	     *   		'render_template' => 'partials/blocks/filename.php',
	     *   	)
	     *	);
        ============================================= */




        /* Retina Image
        ============================================= */
        // acf_register_block_type(
        // 	array(
        // 		'name' 				=> 'retina-image',
        // 		'title' 			=> __('Retina Image'),
        // 		'description' 		=> __('Retina Optimized Image'),
        // 		'category' 			=> 'common',
        // 		'keywords' 			=> array('image', 'photo', 'visual', 'retina'),
        // 		'post_types' 		=> array('post', 'page', 'work'),
        // 		'mode' 				=> 'preview',
        // 		'align' 			=> 'full',
        // 		'render_template' 	=> 'partials/blocks/image.php',
        // 		'icon' 				=> 'format-image',
        // 	)
        // );

	}

?>