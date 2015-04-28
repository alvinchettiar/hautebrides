<?php get_header(); ?>



<!--Main Start-->


<?php //putRevSlider("home-launch") ?>
<div class="main" id="wrapper">
 
  <?php //get_template_part( 'autoscroll' );?>
 
  <!-- <div class="container" id="main"> -->
    <!-- <center><a href="<?php echo get_site_url();?>/membership-account/"><img src="<?php echo get_site_url();?>/wp-content/uploads/2015/03/subscribe-now.jpg" /></a></center> -->
    <div class="content-container">

      <div class="content">

        <?php get_template_part( 'featured', get_post_format() );?>
        <?php get_template_part( 'featured3', get_post_format() );?>
    <?php //get_template_part( 'featured5', get_post_format() );?>
    <?php //get_template_part( 'featured6', get_post_format() );?>
    <?php get_template_part( 'featured7', get_post_format() );?>
    <?php get_template_part( 'featured10', get_post_format() );?>
      </div>
    
    <div class="cb"> </div>
    </div>
    <?php //get_template_part( 'featured2', get_post_format() );?>

    

    <!-- <div class="content-container">

      <div class="content">

        <?php //get_template_part( 'featured4', get_post_format() );?>

      </div>

      <?php //get_sidebar(); ?>

      <div class="cb"> </div>

    </div> -->

    <!--main Container--> 

  <!-- </div> -->


  <!--main End--> 

</div>

<?php get_footer(); ?>

