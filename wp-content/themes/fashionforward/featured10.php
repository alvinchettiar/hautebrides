<?php get_sidebar(); ?>
<section>
<div class="featured_third">
    <?php  $feat_cat = array(

            'category_name' => get_theme_mod('block_10_cat'),

            'posts_per_page' =>3,

            'offset' => 0); 
 
    /* Category credentials */

$category_id = get_category_by_slug( get_theme_mod('block_10_cat') );
$category_link = get_category_link( $category_id ); 


?> 

<!--      <div class="fsection3-cat-title"><a href="--><?php //echo ($category_link); ?><!--">--><?php //echo get_theme_mod('block3_text', 'Category one'); ?><!--</a> </div>-->
    <div class="featured-title"><?php echo get_theme_mod('block10_text', 'Category one'); ?></div>

      <div class="featured-section3">

    <?php   $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>

        <div class="fsection3-post"> <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'featured10-thumbnail' ); ?></a>

          <div class="fsection3-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <?php
            /*$content = apply_filters('the_content', get_the_content());
            $content = htmlspecialchars_decode(str_replace( ']]>', ']]&gt;', $content ));
            $content_length = strlen($content);*/
            $content = wp_strip_all_tags(get_the_content());
            $content_length = strlen($content);
            ?>
            <div class="postdesc">
                 <?php echo substr($content, 0, 65); ?><?php ($content_length > 65) ? "..." : ""; ?>
            </div>

        </div>

   <?php endwhile; ?>

  <?php wp_reset_query(); ?>

        <div class="cb"></div>

      </div>
</div> <!-- .featured_third -->
    </section>

    <?php if ( '1' === get_theme_mod( 'ad_5_on_off' ) ) { ?>

<center>

<div class="ad5">

<?php echo stripslashes( get_theme_mod( 'ad_5_code' ) ) ?>

</div>

</center>

<?php } ?>