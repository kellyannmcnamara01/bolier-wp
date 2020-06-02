<div class="author-card" style="padding: 30px; background: darkblue;">
	<a href="<?php echo $author_URL; ?>"><?php the_author(); ?></a>
	<div class="author-card__avatar">
		<?php
			echo get_avatar( 
				$author_ID, 
				90, 
				'', 
				'alt text', 
				[ 
					'class' => 'author-avatar-class' 
				] 
			);  
		?>
	</div>
	<div class="author-card__desc">
		<?php echo get_the_author_meta( 'description' ); ?>
	</div>
</div>