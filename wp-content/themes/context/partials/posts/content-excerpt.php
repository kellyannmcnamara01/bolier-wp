<div class="entry-card" style="padding: 30px; margin-bottom: 10px; background: teal;">


  <?php if( has_post_thumbnail() ){ ?>
    <div class="entry-card__image">
      <a href="<?php the_permalink(); ?>">
        <?php 
          the_post_thumbnail( 'medium', [ 
            'class' => 'post-thumbnail-class' 
          ] ); 
        ?>
      </a>
    </div>
  <?php } ?>


  <a href="<?php the_permalink(); ?>" class="entry-card__title">
    <?php the_title(); ?>
  </a>


  <span class="entry-card__date">
    <?php echo get_the_date(); ?>
  </span>


  <a href="<?php get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="entry-card__author">
    <?php the_author(); ?>
  </a>


  <div class="entry-card__categories">
    <?php the_category( ' ' ); ?>
  </div>


  <a href="<?php comments_link(); ?>" class="entry-card__comments">
    <?php comments_number( '0' ); ?>
  </a>


  <p class="entry-card__excerpt">
    <?php the_excerpt(); ?>
  </p>


  <a href="<?php the_permalink(); ?>" class="entry-card__read-more">
    Read more
  </a>


</div>
