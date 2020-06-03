<?php

	if( post_password_required() ){
		return;
	}

?>

<!-- Comments
============================================= -->
<section id="comments" style="background: coral; color: white; padding: 30px; font-size: 16px;">

	<h2>Comments</h2>

	<!-- Comments List
	============================================= -->
	<?php
		if( have_comments() ){ ?>

			<h2><?php comments_number(); ?></h2>
			<div class="comments-list" style="padding: 30px; background: tomato;">
				<?php

					foreach( $comments as $comment ){ 
						?>
							<div class="comment">
								<span class="comment__avatar"><?php echo get_avatar( $comment, 60, '', 'alt text', [ 'class' => 'avatar-class' ] ); ?></span>
								<span class="comment__author"><?php comment_author(); ?></span>
								<span class="comment__date"><?php comment_date(); ?></span>
								<span class="comment__text"><?php comment_text(); ?></span>
							</div>
						<?php 
					}

					the_comments_pagination();

				?>
			</div>
		<?php }
	?>
	<!-- Comments List [END] -->


	<!-- Comments Form
	============================================= -->
	<div class="comments-form" style="padding: 30px; background: peachpuff;">
		<?php comment_form( [
			'comment_field'		=>	'<div class="form-field">
										<label for="comment">' . __( 'Comment', 'context' ) . '</label>
										<textarea name="comment"></textarea>
									</div>',
			'fields'			=>	[
				'author'		=>	'<div class="form-field">
										<label for="author">' . __( 'author', 'context' ) . '</label>
										<input type="text" name="author"/>
									</div>',
				'email'		=>	'<div class="form-field">
										<label for="email">' . __( 'email', 'context' ) . '</label>
										<input type="email" name="email"/>
									</div>',
				'url'		=>	'<div class="form-field">
										<label for="url">' . __( 'url', 'context' ) . '</label>
										<input type="text" name="url"/>
									</div>'
			],
			'class_submit'		=>	'comments-form__submit',
			'label_submit'		=>	__( 'Submit comment', 'context' ),
			'title_reply'		=>	__( 'Leave a <span>Comment</span>', 'context' )
		] ); ?>
	</div>
	<!-- Comments Form [END] -->

</section>
<!-- Comments [END] -->