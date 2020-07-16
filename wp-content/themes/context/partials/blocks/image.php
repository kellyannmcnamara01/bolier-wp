<?php




	/* Retina Image
    =============================================
     *
	 * the ACF block should have three fields
	 * 1. image (image picker)
	 * 2. image size (dropdown: three-column, four-column, six-column, full)
	 * 3. image captions */





	$selectedImg		=	get_field( 'image' );
	$selectedImgSize	=	get_field( 'image_size' );
	$selectedImgCaption	=	get_field( 'image_caption' );

	$selectedImgAlt		=	$selectedImg['alt'];
	$selectedImgUrl		=	$selectedImg['url'];

	if( $selectedImgSize == 'Three-Columns' ) {

		$size			=	'image-three-col';
		$sizex2			=	'image-three-col@x2';

	} elseif( $selectedImgSize == 'Four-Columns' ) {

		$size			=	'image-four-col';
		$sizex2			=	'image-four-col@x2';

	} elseif( $selectedImgSize == 'Six-Columns' ) {

		$size			=	'image-six-col';
		$sizex2			=	'image-six-col@x2';

	} else {

		$size			=	'image-full';
		$sizex2			=	'image-full@x2';
	}

	$img 				=	$selectedImg['sizes'][ $size ];
	$imgx2 				=	$selectedImg['sizes'][ $sizex2 ];

?>

<?php if ( $selectedImg ) { ?>
	<div class="image-block <?php echo $selectedImgSize; ?>">
		<figure>
			<picture>
				<source media="(max-width: 368px)" srcset="<?php echo $img; ?> 1x, <?php echo $imgx2; ?> 2x">
				<img alt="<?php echo esc_attr($selectedImgAlt); ?>"
				src="<?php echo $img; ?>" 
				srcset="<?php echo $img; ?> 1x, <?php echo $imgx2; ?> 2x">
			</picture>
			<?php if ( $selectedImgCaption ) { ?><figcaption><?php echo $selectedImgCaption; ?></figcaption><?php } ?>
		</figure>
	</div>
<?php } ?>

<?php wp_reset_query(); ?>