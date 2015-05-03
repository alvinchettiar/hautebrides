<?php if ( '1' === get_theme_mod( 'ad_2_on_off' ) ) { ?>
<center>
<div class="ad2">
<?php echo stripslashes( get_theme_mod( 'ad_2_code' ) ) ?>
</div>
</center>
<?php } ?>

 <!--Featured Area Start-->

    <section>

        <div class="featured_third">
        <?php //putRevSlider("home-launch") ?><br>
            <?php echo do_shortcode("[URIS id=150]"); ?>
    <div class="featured-title"><?php echo get_theme_mod('block1_text', 'What’s Hottest Now!'); ?></div>
    
    <?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_1_cat'),
            'posts_per_page' => 4,
            'offset' => 0); 
   ?>
  <div class="featured-post-container">
  <?php $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>

          <div class="featured-post">
<!--            <div class="fpost-title"><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></div>-->
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'feature-thumbnail' ); ?></a>
              <?php
              /*$content = apply_filters('the_content', get_the_content());
              $content1 = htmlspecialchars_decode(str_replace( ']]>', ']]&gt;', $content ));
              $content2 = preg_replace('/^\s+|\n|\r|\s+$/m', '', $content1);
              $content_length = strlen($content2);*/

              $content = get_the_content();
              $content_length = strlen($content);
              ?>
              <div class="postdesc">

                  <div class="fsection3-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                  <?php echo substr($content, 0, 150); ?><?php ($content_length > 150) ? "..." : ""; ?>
              </div>
            </div>

         <?php endwhile; ?>
  <?php wp_reset_query(); ?>
  <div class="cb"></div>
   </div>
</div>
    </section>


    <!--Featured Area End--> 
<?php if ( '1' === get_theme_mod( 'ad_3_on_off' ) ) { ?>
<center>
<div class="ad3">
<?php echo stripslashes( get_theme_mod( 'ad_3_code' ) ) ?>
</div>
</center>
<?php } ?>
