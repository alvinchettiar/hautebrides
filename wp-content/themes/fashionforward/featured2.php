<!--fashion news section-->



<section>

<?php  $feat_cat = array(

            'category_name' => get_theme_mod('block_2_cat'),

            'posts_per_page' =>1,

            'offset' => 0); ?>

<div class="featured-section2">

<?php

  $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>

<div class="fsection2-post1">

  <div class="fsection2-post1-date"> <span><?php comments_popup_link('#0', '#1', '#%'); ?></span><a href="<?php the_permalink(); ?>"><?php the_time('j M') ?></a></div>

  <a href="<?php the_permalink(); ?>" rel="bookmark">

  <?php the_post_thumbnail( 'featured2-thumbnail' ); ?>

  </a>

  <div class="fsection2-post-title"><a href="<?php the_permalink(); ?>">

    <?php the_title(); ?>

    </a></div>

</div>

<?php endwhile; ?>

<?php wp_reset_query(); ?>

<?php  $feat_cat = array(

            'category_name' => get_theme_mod('block_2_cat'),

            'posts_per_page' =>3,

            'offset' => 1); 

    /* Category credentials */
$category_id = get_category_by_slug( get_theme_mod('block_2_cat') );
$category_link = get_category_link( $category_id ); 



?>

<div class="fsection2-small-posts">

  <div class="fsection2-cat-title"><a href="<?php echo ($category_link); ?>"><?php echo get_theme_mod('block2_text', 'Category one'); ?></a></div>

  <?php  $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>

  <div class="fsection2-post2">

    <div class="fsection2-post2-date"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_time('j M') ?></a></div>

    <a href="<?php the_permalink(); ?>" rel="bookmark">

    <?php the_post_thumbnail( 'featured2-small-thumbnail' ); ?>

    </a>

    <div class="fsection2-small-post-title"><a href="<?php the_permalink(); ?>">

      <?php the_title(); ?>

      </a></div>

  </div>

  <?php endwhile; ?>

  <?php wp_reset_query(); ?>

  <div class="cb"></div>

</div>

</section>

<?php if ( '1' === get_theme_mod( 'ad_4_on_off' ) ) { ?>

<center>

<div class="ad4">

<?php echo stripslashes( get_theme_mod( 'ad_4_code' ) ) ?>

</div>

</center>

<?php } ?>