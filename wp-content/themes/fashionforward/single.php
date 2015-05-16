<?php get_header(); ?>



<!--Header End-->







<!--Single Main Start-->



<div class="main-single">

  <div class="breadcrumb"><div class="breadcrumb-left"> <span class="statictext"><?php _e('You are here: ','mm'); ?> </span> <?php m3_seo_breadcrumbs(); ?></div>



<div class="leavecomment">
<div class="viewsmeta"><?php if(function_exists('magazine3_setPostViews')) { ?> <span class="m3views"><?php magazine3_setPostViews(get_the_ID()); ?><?php echo magazine3_getPostViews(get_the_ID()); ?> <?php _e( 'views', 'mm' ); ?> </span> <?php } else { } ?></div> |


<?php comments_popup_link('LEAVE A COMMENT', '1 COMMENT', '% COMMENTS'); ?>



</div>



<div class="cb"></div>



  </div>


  <?php //get_template_part( 'autoscroll' );?>
   <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>





<?php //get_sidebar('inner'); ?>
  <div class="content-single-inner">
      <div class="singlepage-title"> <h1><?php the_title(); ?></h1></div>
<?php if ( '1' === get_theme_mod( 'ad_8_on_off' ) ) { ?>
<center>
<div class="ad8">
<?php echo stripslashes( get_theme_mod( 'ad_8_code' ) ) ?>
</div>
</center>
<?php } ?>

      <div class="meta_author">

       <ul>

        <li>

          <div>

            <?php _e('By ','mm'); ?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title=" <?php printf( esc_attr__( 'View all posts by %s', 'mm'), get_the_author() ); ?>"><?php the_author(); ?></a> <?php _e('on ','mm'); ?> <?php echo get_the_date(); ?> <?php edit_post_link('Edit This', ' / ', ''); ?>

          </div>

        </li>

      </ul> 

      </div>



      <div class="cotent-text"><?php the_content(); ?></div>

<?php if ( '1' === get_theme_mod( 'ad_9_on_off' ) ) { ?>
<center>
<div class="ad9">
<?php echo stripslashes( get_theme_mod( 'ad_9_code' ) ) ?>
</div>
</center>
<?php } ?>

      <div class="social-wrapper">



      <?php if ( '1' === get_theme_mod( 'tag_on_off' ) ) { ?>



        <div class="tags"> <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'mm' ), 'after' => '</div>' ) ); ?>



   



     <?php the_tags(__('Tags: <span class="tagssingle">'), '  ', '</span>'); ?>



    </div>



    <?php } else { ?> <?php } ?>



     <?php if ( '1' === get_theme_mod( 'social_on_off' ) ) { ?>



        <div class="social-area"><span>SHARE IT ACROSS THE SOCIAL MEDIA</span> 



        



      <div class="social-area-right">



<!-- AddThis Button BEGIN -->



<div class="addthis_toolbox addthis_default_style ">



<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>



 <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>



<a class="addthis_button_tweet"></a>



<a class="addthis_counter addthis_pill_style"></a>



</div>



<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js"></script>



<!-- AddThis Button END --></div>



         </div>



          <?php } ?>



        <div class="cb"></div>



      </div>



      <?php if ('1' === get_theme_mod( 'recommended_on_off' )) { ;?> 



      <div class="recommended_stories">



        <?php get_template_part( 'content-single' ); ?>



      </div>



         <?php }?>



     <?php if(function_exists('about_this_author')) { echo about_this_author(); } ?>



      <?php // If comments are open or we have at least one comment, load up the comment template.



if ( comments_open() || get_comments_number() ) { comments_template(); }



wp_link_pages( array(



'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'mm' ) . '</span>',



'after'       => '</div>',



'link_before' => '<span>',



'link_after'  => '</span>',



) );



?>  







  </div>



  <?php endwhile; ?>



<?php endif; ?>



  <!--primary-sidebar-->



  <?php get_sidebar('inner'); ?>



  <div class="cb"> </div>



</div>



<!--Single Main end--> 







<!-- footer start -->



<?php get_footer(); ?>



