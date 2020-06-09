<ul class="post-cards">
  <li id="post-<?php the_ID(); ?>"  <?php post_class( 'post-card accessible-card js--accessible-card' ); ?> style="padding: 30px; margin-bottom: 10px; background: teal;">


    <?php if( has_post_thumbnail() ){ ?>
      <div class="post-card__image">
        <?php 
          the_post_thumbnail( 'medium', [ 
            'class' => 'post-thumbnail-class' 
          ] ); 
        ?>
      </div>
    <?php } ?>


    <h3 class="post-card__title">
      <?php the_title(); ?>
    </h3>


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
</ul>