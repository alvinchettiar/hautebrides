<?php get_header(); ?>


<div class="main-single">

  <div class="breadcrumb"><div class="breadcrumb-left"> <span class="statictext"><?php _e('You are here: ','mm'); ?> </span> <?php m3_seo_breadcrumbs(); ?></div>

<div class="leavecomment">


</div>

<div class="cb"></div>

  </div>

   <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

  <div class="singlepage-title"><h1><?php the_title(); ?></h1></div>

  <div class="content-single">

      <div class="meta_author">
       <ul>
        <li>
          <div>
            <?php _e('Posted by ','mm'); ?><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title=" <?php printf( esc_attr__( 'View all posts by %s', 'mm'), get_the_author() ); ?>"><?php the_author(); ?></a> <?php _e('on ','mm'); ?> <?php echo get_the_date(); ?> <?php edit_post_link('Edit This', ' / ', ''); ?>
          </div>
        </li>
      </ul> 
      </div>

      <div class="cotent-text"<?php the_content(); ?></div>

        

    

  

        
 

       

 
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

  <?php get_sidebar(); ?>

  <div class="cb"> </div>

</div>

<!--Single Main end--> 



<!-- footer start -->

<?php get_footer(); ?>
