<?php get_header(); ?>

 
    	<div class="main">
  <div class="woocommerce-single">
	<?php woocommerce_content(); ?>
    
		 <div class="woocommerce-title">
      <?php the_title(); ?>
      </div>
        
        <div class="cotent-text">
        <?php the_content(); ?>
      </div>
  
 	 </div>
   <?php get_sidebar(); ?>
   <div class="cb"></div>
  </div>
<?php get_footer(); ?>