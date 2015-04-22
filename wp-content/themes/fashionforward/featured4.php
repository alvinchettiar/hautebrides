<!--section #4-->

<section>

<?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_4_cat'),
            'posts_per_page' =>1,
            'offset' => 0); 
     $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
<div class="section4-left-post"> <a href="<?php the_permalink(); ?>" rel="bookmark">
  <?php the_post_thumbnail( 'featured4-right-thumbnail' ); ?>
  </a>
  <div class="section4-left-post-title"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<div class="section4-right-post">
  <?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_4_cat'),
            'posts_per_page' =>2,
            'offset' => 1); 
    /* Category credentials */
$category_id = get_category_by_slug( get_theme_mod('block_4_cat') );
$category_link = get_category_link( $category_id ); 

?>
  <div class="section4-cat-title"><a href="<?php echo ($category_link); ?>"><?php echo get_theme_mod('block4_text', 'Category one'); ?></a> </div>
  <?php   $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
  <div class="right-post1"><a href="<?php the_permalink(); ?>" rel="bookmark">
    <?php the_post_thumbnail( 'featured4-left-thumbnail' ); ?>
    </a>
    <div class="right-post1-title"><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></div>
    <?php endwhile; ?>
     <?php wp_reset_query(); ?>
  </div>
  <div class="cb"></div>
  <?php  /*$feat_cat = array(
            'category_name' => get_theme_mod('block_4_cat'),
            'posts_per_page' =>2,
            'offset' => 2); 
     $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();
      */
     ?>
     <!--
  <div class="right-post2"><a href="<?php the_permalink(); ?>" rel="bookmark">
    <?php the_post_thumbnail( 'featured4-small-thumbnail' ); ?>
    </a>
    <div class="right-post2-title"><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></div></div>-->
  <?php //endwhile; ?>
  <?php //wp_reset_query(); ?>
  </div>
  <!-- <div class="cb"></div> -->

</section>
<!--section #4 End-->


<!--section #5-->

<section>
<div class="section4">
<?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_5_cat'),
            'posts_per_page' =>1,
            'offset' => 0); 
     $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
<div class="section4-left-post"> <a href="<?php the_permalink(); ?>" rel="bookmark">
  <?php the_post_thumbnail( 'featured4-right-thumbnail' ); ?>
  </a>
  <div class="section4-left-post-title"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<div class="section4-right-post">
  <?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_5_cat'),
            'posts_per_page' =>1,
            'offset' => 1); 
    /* Category credentials */
$category_id = get_category_by_slug( get_theme_mod('block_5_cat') );
$category_link = get_category_link( $category_id ); 

?>
  <div class="section5-cat-title"><a href="<?php echo ($category_link); ?>"><?php echo get_theme_mod('block5_text', 'Category one'); ?></a> </div>
  <?php   $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
  <div class="right-post1"><a href="<?php the_permalink(); ?>" rel="bookmark">
    <?php the_post_thumbnail( 'featured4-left-thumbnail' ); ?>
    </a>
    <div class="right-post1-title"><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></div>
    <?php endwhile; ?>
     <?php wp_reset_query(); ?>
  </div>
  <?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_5_cat'),
            'posts_per_page' =>2,
            'offset' => 2); 
     $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
  <div class="right-post2"><a href="<?php the_permalink(); ?>" rel="bookmark">
    <?php the_post_thumbnail( 'featured4-small-thumbnail' ); ?>
    </a>
    <div class="right-post2-title"><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></div></div>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
  </div>
  <div class="cb"></div>
</div>
</section>
<!--section #5 End-->


<!--section #6-->

<section>
<div class="section6">
<?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_6_cat'),
            'posts_per_page' =>1,
            'offset' => 0); 
     $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
<div class="section4-left-post"> <a href="<?php the_permalink(); ?>" rel="bookmark">
  <?php the_post_thumbnail( 'featured4-right-thumbnail' ); ?>
  </a>
  <div class="section4-left-post-title"><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></div>
</div>
<?php endwhile; ?>
<?php wp_reset_query(); ?>
<div class="section4-right-post">
  <?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_6_cat'),
            'posts_per_page' =>1,
            'offset' => 1); 
    /* Category credentials */
$category_id = get_category_by_slug( get_theme_mod('block_6_cat') );
$category_link = get_category_link( $category_id ); 

?>
  <div class="section6-cat-title"><a href="<?php echo ($category_link); ?>"><?php echo get_theme_mod('block6_text', 'Category one'); ?></a> </div>
  <?php   $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
  <div class="right-post1"><a href="<?php the_permalink(); ?>" rel="bookmark">
    <?php the_post_thumbnail( 'featured4-left-thumbnail' ); ?>
    </a>
    <div class="right-post1-title"><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></div>
    <?php endwhile; ?>
     <?php wp_reset_query(); ?>
  </div>
  <?php  $feat_cat = array(
            'category_name' => get_theme_mod('block_6_cat'),
            'posts_per_page' =>2,
            'offset' => 2); 
     $the_query = new WP_Query( $feat_cat ); while ( $the_query->have_posts() ) : $the_query->the_post();?>
  <div class="right-post2"><a href="<?php the_permalink(); ?>" rel="bookmark">
    <?php the_post_thumbnail( 'featured4-small-thumbnail' ); ?>
    </a>
    <div class="right-post2-title"><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a></div></div>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
  </div>
  <div class="cb"></div>
</div>
</section>
<!--section #6 End-->