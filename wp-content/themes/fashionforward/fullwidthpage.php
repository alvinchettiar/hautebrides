<?php /**

 * Template Name: Full Width

*/?>

<?php get_header(); ?>



<div class="main">



	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <div class="singlepage-title"><h1>
        <?php the_title(); ?>

      </h1></div>

        

        <div class="cotent-text">

        <?php the_content(); ?>

      </div>

   

    <?php endwhile; ?>

    <?php endif; ?>

 </div>



<?php get_footer(); ?>