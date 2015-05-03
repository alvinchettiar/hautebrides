<?php if ( '1' === get_theme_mod( 'ad_6_on_off' ) ) { ?>
<center>
<div class="ad6">
<?php echo stripslashes( get_theme_mod( 'ad_6_code' ) ) ?>
</div>
</center>
<?php } ?>
<!-- footer start -->
<div class="footer" id="footer"> 
  <!--Footer-menu Start-->

  <div class="footer-menu-holder">

    <div class="footer-menu-container">

      <div class="footer-logo"> <?php if ( get_theme_mod( 'theme_logo' ) ) : ?>

    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_theme_mod( 'theme_logo' ) ); ?>" alt="<?php bloginfo('name'); ?>" /></a>

    <?php else : ?>

    <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>

      <?php bloginfo( 'name' ); ?>

      </a></h1>

    <?php endif; ?></div>

      <nav class="footer-menu">

        <?php if(has_nav_menu ('footer_nav'))

                        wp_nav_menu( array( 

                            'container' => 'nav',

                            'container_id' => 'nav',

                            'theme_location' => 'footer_nav', 

                            'sort_column' => 'menu_order',

                            'menu_class' => '',  ));

                            ?>

      </nav>

    </div>

    <div class="cb"></div>

  </div>

  <footer>

    <div class="footercontainer">

      <div class="footer-widgets">

        <?php if(is_Active_sidebar('footer-sidebar-1')):?>

       <?php dynamic_sidebar('footer-sidebar-1'); ?>

       <?php endif;?>

      </div>

      <div class="footer-widgets">

       <?php if(is_Active_sidebar('footer-sidebar-2')):?>

       <?php dynamic_sidebar('footer-sidebar-2'); ?>

       <?php endif;?>

      </div>

      <div class="footer-widgets">

      <?php if(is_Active_sidebar('footer-sidebar-3')):?>

       <?php dynamic_sidebar('footer-sidebar-3'); ?>

       <?php endif;?>

      </div>

      <div class="footer-widgets forth-widget">

       <?php if(is_Active_sidebar('footer-sidebar-4')):?>

       <?php dynamic_sidebar('footer-sidebar-4'); ?>

       <?php endif;?>

      </div>

      <div class="cb"></div>

    </div>

    <div class="copyright-wrapper">

      <div class="copyrights-container"><?php echo stripslashes( get_theme_mod( 'copyright_text' ) ) ?></div>

    </div>

    <div class="cb"></div>

  </footer>

  <!-- footer end --> 

</div>

<?php wp_footer(); ?>

<?php echo stripslashes( get_theme_mod( 'textarea_setting' ) ) ?>

<?php if ( '1' === get_theme_mod( 'ad_7_on_off' ) ) { ?>
<center>
<div class="ad7">
<?php echo stripslashes( get_theme_mod( 'ad_7_code' ) ) ?>
</div>
</center>
<?php } ?>


<?php //if (is_home()) { popupwfb( $Popupwfb_group = "", $Popupwfb_id = "" ); } ?>
<script>
    var num = 50; //number of pixels before modifying styles

    jQuery(window).bind('scroll', function () {
        if (jQuery(window).scrollTop() > num) {
            jQuery('.primary-menu-holder').addClass('fixed');
        } else {
            jQuery('.primary-menu-holder').removeClass('fixed');
        }
    });
</script>
<style>
    .fixed {
        position:fixed;
        top:0;
        background-color: white;
        z-index: 999999;
    }
</style>
 
</body>

</html>