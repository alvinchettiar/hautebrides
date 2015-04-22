<aside>

    <div class="small-sidebar" id="sticky-sidebar">



      <div class="small-widget-title"> <?php _e( 'THE LATEST', 'mm' ); ?> </div>



      <div class="daily-fashion"><?php _e( '[your daily fashion dose] ', 'mm' ); ?></div>



      <div id="scrollbar1">



        <div class="scrollbar">

          <div class="track">

            <div class="thumb">

              <div class="end"></div>

            </div>

          </div>

        </div>



        <div class="viewport">    



          <div class="posts overview">





<!-- Infinity scroll Code  -->



<div id="mainmasonry">

                <?php query_posts(array('paged'=>$paged)); ?>

        

                <?php if (have_posts()) : ?>

<div id="post-entries"><!-- This ID is must for Load More button -->

  <?php if (have_posts()) :

    while (have_posts()) : the_post(); ?>



    <div class="latest-posts-container">



        <div class="latest-post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'slidersmall' ); ?></a></div>



        <div class="latest-post-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>



        <div class="latest-post-date"><div class="latest-date"> <?php the_time('M j Y') ?>  <?php _e( 'in', 'mm' ); ?> </div> <span><?php the_category(' '); ?></span></div>



        <div class="cb"></div>

    </div> 



  <?php endwhile; ?>

</div><!-- /post-entries -->

    <?php wp_enqueue_script('wpex-ajax-load');

        echo aq_load_more(); ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>



                <?php endif; ?>

            

            </div> 



 

<!-- Infinity scroll Code  -->





          </div>

        </div>

      </div>



    </div>



</aside>



