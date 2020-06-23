<li id="post-<?php the_ID(); ?>"  <?php post_class( 'post-card accessible-card js--accessible-card' ); ?> style="padding: 30px; margin-bottom: 10px; background: teal;">


  <?php if( has_post_thumbnail() ){ ?>
    <div class="post-card__image">

      <?php
        $thumb_id = get_post_thumbnail_id( get_the_ID() );
        $thumb_alt = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
        $thumb_src = wp_get_attachment_url( get_post_thumbnail_id() );
      ?>
      <img alt="<?php echo $thumb_alt; ?>" src="<?php echo $thumb_src; ?>" class="post-thumbnail-class" width="100%">

    </div>
  <?php } ?>


  <p class="post-card__title">
    <?php the_title(); ?>
  </p>


  <span class="post-card__date">
    <?php echo get_the_date(); ?>
  </span>


  <?php 
  /* Add a link to the author's posts
   * get_author_posts_url( get_the_author_meta( 'ID' ) ); */ ?>
  <span class="post-card__author">
    <?php the_author(); ?>
  </span>


  <?php 
  /* Add a link to the caegories
   * instead of the foreach loop: the_category( ' ' ); */ ?>
  <div class="post-card__categories">
    <?php foreach( (get_the_category() ) as $category ) { echo $category->cat_name . ' '; } ?>
  </div>


  <?php 
  /* Add a link to the posts's comments
   * comments_link(); */ ?>
  <span class="post-card__comments">
    <?php comments_number( '0' ); ?>
  </span>


  <p class="post-card__excerpt">
    <?php the_excerpt(); ?>
  </p>


  <a href="<?php the_permalink(); ?>" class="post-card__link accessible-card__link js--accessible-card__link" accessible-card-link="post-<?php the_ID(); ?>">
    Read more
  </a>


</li>