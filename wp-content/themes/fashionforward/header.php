<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width">
<title><?php wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="generator" content="Magazine3 Framework" />
<!--[if lt IE 9]>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if ( '1' === get_theme_mod( 'backtotop_on_off' ) ) { ?>

<div id="back-top"><a href="#top"><span>

  <?php _e('Scroll to Top','mm'); ?>

  </span></a></div>

<?php } else { ?>

<?php } ?>

<?php if ( '1' === get_theme_mod( 'ad_1_on_off' ) ) { ?>

<center>

<div class="ad1">

<?php echo stripslashes( get_theme_mod( 'ad_1_code' ) ) ?>

</div>

</center>

<?php } ?>

<!--Before Header-->

<div class="before-header">
<h1 class='seo-site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>

  <div class="before-header-container">

    <?php if(has_nav_menu ('top_nav')){ ?>

    <div class="numeric">#</div>

    <!--Top Menu-->

    <nav class="top-menu">

      <?php if(has_nav_menu ('top_nav'))

                        wp_nav_menu( array( 

                            'container' => 'nav',

                            'container_id' => 'nav',

                            'theme_location' => 'top_nav', 

                            'sort_column' => 'menu_order',

                            'menu_class' => '',  ));

                            ?>

    </nav>

    <?php } ?>

    <!--Top Menu End--> 

    <!--Top Search-->

    <div class="search-top">

      <div class="headerright">

        <nav class="top-nav">

          <div class="example">

            <ul id="social-dropdown">

<!--              <li class="soc"><a class="social-networks">-->
<!---->
<!--                --><?php //_e("FOLLOW", "mm"); ?>
<!---->
<!--                </a>-->
<!---->
<!--                <div class="subs">-->
<!---->
<!--                  <div class="top-menu-items fullwidthmenu-social">-->
<!---->
<!--                    <ul class="menucontent_wrapper-social">-->
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'instagram_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('instagram'); ?><!--" class="btn-instagram" target="_blank"></a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'twitter_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('twitter'); ?><!--" class="btn-twitter" target="_blank"></a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'rss_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('rss'); ?><!--" class="btn-rss" target="_blank"></a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'facebook_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('facebook'); ?><!--" class="btn-facebook" target="_blank"> </a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'printerest_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('printerest'); ?><!--" class="btn-printerest" target="_blank"> </a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'linkedin_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('linkedin'); ?><!--" class="btn-linkedin" target="_blank"></a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'youtube_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('youtube'); ?><!--" class="btn-youtube" target="_blank"></a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'google-plus_on_off' ) ) { ?>
<!---->
<!--                      <li> <a href="--><?php //echo get_theme_mod('google-plus'); ?><!--" class="btn-google-plus" target="_blank"></a> </li>-->
<!---->
<!--                      --><?php //}?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'vimeo_on_off' ) ) { ?>
<!--                      <li> <a href="--><?php //echo get_theme_mod('vimeo'); ?><!--" class="btn-vimeo" target="_blank"> </a> </li>-->
<!--                      --><?php //} ?>
<!---->
<!--                      --><?php //if ( '1' === get_theme_mod( 'tumblr_on_off' ) ) { ?>
<!--                      <li> <a href="--><?php //echo get_theme_mod('tumblr'); ?><!--" class="btn-tumblr" target="_blank"> </a> </li>-->
<!--                      --><?php //} ?>
<!-- -->
<!--                      --><?php //if ( '1' === get_theme_mod( 'soundcloud_on_off' ) ) { ?>
<!--                      <li> <a href="--><?php //echo get_theme_mod('soundcloud'); ?><!--" class="btn-soundcloud" target="_blank"> </a> </li>-->
<!--                      --><?php //} ?>
<!---->
<!--                    </ul>-->
<!---->
<!--                  </div>-->
<!---->
<!--                </div> -->
<!---->
<!--              </li>-->

              <li class="searchbar"><a class="search fonticon"></a>

                <div class="subs">

                  <div class="top-menu-items fullwidthmenu">

                    <div class="head-search menucontent_wrapper">

                      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">

                        <input type="search" placeholder="Enter Search Here" class="header-search_input" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">

                        <input type="submit" value="" class="searchbutton">

                      </form>

                    </div>

                  </div>

                </div>

            </ul>

          </div>

        </nav>

      </div>

    </div>

    <!--clear:both-->

    <div class="cb"></div>

  </div>

</div>

<!--Header Start-->

<header>

<div class="header-container">

  <div class="logo">

    <?php if ( get_theme_mod( 'theme_logo' ) ) : ?>

    <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_theme_mod( 'theme_logo' ) ); ?>" alt="<?php bloginfo('name'); ?>" /></a>

    <?php else : ?>

    <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>

      <?php bloginfo( 'name' ); ?>

      </a></h1>

    <?php endif; ?>

  </div>

  <!--primary-menu Start-->

  <div class="primary-menu-holder">

    <div class="primary-menu-container">

      <nav class="primary-menu main-menu">

        <div class="responsivemenu"> <nav id="mobile-menu" role="navigation"></nav></div> <!-- end responsivemenu div -->
        <div class="menu-primary">
           <?php if(has_nav_menu ('primary_nav'))
                        wp_nav_menu( array( 
                            'container' => '',
                            'container_id' => '',
                            'theme_location' => 'primary_nav', 
                            'sort_column' => 'menu_order',
                            'menu_class' => '',  ));
                            ?>    
        </div>
      

      </nav>

    </div>

  </div>

  <div class="cb"></div>

  <!--primary-menu End--> 

  </div>

</header>

<!--Header End--> 
