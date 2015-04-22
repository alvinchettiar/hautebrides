    <div class="latest-posts-container" id="masonryme">

        <div class="latest-post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'slidersmall' ); ?></a></div>

        <div class="latest-post-content"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

        <div class="latest-post-date"><div class="latest-date"> <?php the_time('M j Y') ?>  <?php _e( 'in', 'mm' ); ?> </div> <span><?php the_category(' '); ?></span></div>

        <div class="cb"></div>
    </div> 