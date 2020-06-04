<div id="post-<?php the_ID(); ?>"  <?php post_class( 'post-card' ); ?> style="padding: 30px; margin-bottom: 10px; background: teal;">


  <?php if( has_post_thumbnail() ){ ?>
    <div class="post-card__image">
      <a href="<?php the_permalink(); ?>">
        <?php 
          the_post_thumbnail( 'medium', [ 
            'class' => 'post-thumbnail-class' 
          ] ); 
        ?>
      </a>
    </div>
  <?php } ?>


  <a href="<?php the_permalink(); ?>" class="post-card__title">
    <?php the_title(); ?>
  </a>


  <span class="post-card__date">
    <?php echo get_the_date(); ?>
  </span>


  <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="post-card__author">
    <?php the_author(); ?>
  </a>


  <div class="post-card__categories">
    <?php the_category( ' ' ); ?>
  </div>


  <a href="<?php comments_link(); ?>" class="post-card__comments">
    <?php comments_number( '0' ); ?>
  </a>


  <p class="post-card__excerpt">
    <?php the_excerpt(); ?>
  </p>


  <a href="<?php the_permalink(); ?>" class="post-card__read-more">
    Read more
  </a>


</div>