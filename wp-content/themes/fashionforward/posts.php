  
      <div class="post_area">
       <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
      
        <div class="post">
          <div class="thumbnail"> <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail( 'blogthumbnail' );?> </a> </div>
          <div class="rightconside">
          <div class="posttitle"><h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
          <div class="aurthermainmain">
          <?php _e('By','mm'); ?>  <?php the_author_posts_link(); ?>
          </div>
           <div class="posttextcontent"> 
           <?php the_content_limit('200') ?>
          </div>
          </div>
        	 
        </div>
       <?php endwhile; ?>		
		<?php endif; ?>
        <div class="pagination">
		   <?php my_pagination() ?>
       
		</div>
       </div>
             