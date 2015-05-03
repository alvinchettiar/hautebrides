<?php
add_action( 'after_setup_theme', 'fashionforward_theme_setup' );
/**
 * Theme setup function.
 * @since  0.1.0
 */
function fashionforward_theme_setup(){
  /* updater args */
  $updater_args = array( 
    'repo_uri'    => 'http://magazine3.com/updates/',
    'repo_slug'   => 'fashionforward' ); 
  /* add support for updater */
  add_theme_support( 'auto-hosted-theme-updater', $updater_args );
}
/* Load Theme Updater */
require_once( trailingslashit( get_template_directory() ) . 'includes/theme-updater.php' );
new fashionforward_Theme_Updater;  
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {
  /**
   * Array of plugin arrays. Required keys are name and slug.
   * If the source is NOT from the .org repo, then source is also required.
   */
  $plugins = array(
    /** This is an example of how to include a plugin pre-packaged with a theme */
    array(
      'name'     => 'Magazine3 Widgets', // The plugin name
      'slug'     => 'magazine3-widgets', // The plugin slug (typically the folder name)
      'source'   => get_template_directory_uri() . '/plugins/magazine3-widgets.zip',
      // The lugin source
      'required' => false,
    ),

    /** This is an example of how to include a plugin from the WordPress Plugin Repository */

  //  array(

   //  'name' => 'Edit Howdy',
    //  'slug' => 'edit-howdy',
   // ),

  );

  /** Change this to your theme text domain, used for internationalising strings */

  $theme_text_domain = 'mm';

  /**
   * Array of configuration settings. Uncomment and amend each line as needed.
   * If you want the default strings to be available under your own theme domain,
   * uncomment the strings and domain.
   * Some of the strings are added into a sprintf, so see the comments at the
   * end of each line for what each argument will be.
   */

  $config = array(

    /*'domain'       => $theme_text_domain,         // Text domain - likely want to be the same as your theme. */

    /*'default_path' => '',                         // Default absolute path to pre-packaged plugins */

    /*'menu'         => 'install-my-theme-plugins', // Menu slug */

    'strings'        => array(

      /*'page_title'             => __( 'Install Required Plugins', $theme_text_domain ), // */

      /*'menu_title'             => __( 'Install Plugins', $theme_text_domain ), // */

      /*'instructions_install'   => __( 'The %1$s plugin is required for this theme. Click on the big blue button below to install and activate %1$s.', $theme_text_domain ), // %1$s = plugin name */

      /*'instructions_activate'  => __( 'The %1$s is installed but currently inactive. Please go to the <a href="%2$s">plugin administration page</a> page to activate it.', $theme_text_domain ), // %1$s = plugin name, %2$s = plugins page URL */

      /*'button'                 => __( 'Install %s Now', $theme_text_domain ), // %1$s = plugin name */

      /*'installing'             => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name */

      /*'oops'                   => __( 'Something went wrong with the plugin API.', $theme_text_domain ), // */

      /*'notice_can_install'     => __( 'This theme requires the %1$s plugin. <a href="%2$s"><strong>Click here to begin the installation process</strong></a>. You may be asked for FTP credentials based on your server setup.', $theme_text_domain ), // %1$s = plugin name, %2$s = TGMPA page URL */

      /*'notice_cannot_install'  => __( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', $theme_text_domain ), // %1$s = plugin name */

      /*'notice_can_activate'    => __( 'This theme requires the %1$s plugin. That plugin is currently inactive, so please go to the <a href="%2$s">plugin administration page</a> to activate it.', $theme_text_domain ), // %1$s = plugin name, %2$s = plugins page URL */

      /*'notice_cannot_activate' => __( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', $theme_text_domain ), // %1$s = plugin name */

      /*'return'                 => __( 'Return to Required Plugins Installer', $theme_text_domain ), // */

    ),

  );

  tgmpa( $plugins, $config );

}

  /* 

   * Make this Magazine3 theme available for translation.

   *

   * Translations can be added to the /languages/ directory.

   */

  load_theme_textdomain( 'mm', get_template_directory() . '/languages' );
/*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
  ) );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }

// Favicon image
if ( get_theme_mod( 'favicon_image' ) != '') {
    function mmtheme_get_favicon() {
  global $shortname;
  if ( get_theme_mod( 'favicon_image' ) != '') {
    $output = '<link rel="shortcut icon" type="image/x-icon" href="'. get_theme_mod( 'favicon_image' ) .'"/>';
  }else { 
    $output = '';
  }
  echo $output;
}
add_action('wp_head', 'mmtheme_get_favicon');
}
 
// OpenGraph SEO integration in Header Meta. 
if ( '1' === get_theme_mod( 'og_on_off' ) ) {
  get_template_part('og_seo_integration');
} else { }

// Canonical SEO urls to avoid duplication of content
add_action( 'wp_head', 'rel_canonical' );

// Default SEO title
add_filter( 'wp_title', 'm3_wp_title_for_home' );
function m3_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
} 

//Add support for WordPress 3.0's custom menus

add_action( 'init', 'register_my_menu' );

//Register area for custom menu

function register_my_menu() {

register_nav_menus( array(

	'top_nav' => __( 'Trending Navigation', 'base' ),

) );

register_nav_menus( array(

	'primary_nav' => __( 'Primary Navigation', 'base' ),

) );

register_nav_menus( array(

	'footer_nav' => __( 'Footer Navigation', 'base' ),

) );

}

// Favicon image

if ( get_theme_mod( 'favicon_image' ) == '') {

    function mmtheme_get_favicon() {

  global $shortname;

  if ( get_theme_mod( 'favicon_image' ) != '') {

    $output = '<link rel="shortcut icon" type="image/x-icon" href="'. get_theme_mod( 'favicon_image' ) .'"/>';

  }else { 

    $output = '';

  }

  echo $output;

}

add_action('wp_head', 'mmtheme_get_favicon');

}





// adding a class for layout option.

function add_layout_class( $classes ) {

      if ( '2' === get_theme_mod( 'sidebar_switch' ) ) {

        array_push( $classes, 'sidebar-left' );

      } // end if

    return $classes; 

}

add_filter('body_class', 'add_layout_class');



//Code for custom background support

add_custom_background();



//Enable post and comments RSS feed links to head

add_theme_support( 'automatic-feed-links' );

/* THUMBNAIL */

if( function_exists( 'add_theme_support' ) ) {



add_theme_support( 'post-thumbnails' );	  

//add_image_size( 'feature-thumbnail', 296, 355 , true );
//creating custom image size for feature-thumbnail
add_image_size( 'feature-thumbnail', 454, 355 , true );

add_image_size( 'featured2-small-thumbnail', 186, 230 , true );

add_image_size( 'featured2-thumbnail', 368, 444 , true );

//add_image_size( 'featured3-thumbnail', 215, 256 , true );
add_image_size( 'featured3-thumbnail', 280, 315 , true );

add_image_size( 'featured4-right-thumbnail', 297, 388 , true );

add_image_size( 'featured4-left-thumbnail', 297, 168 , true );

add_image_size( 'featured4-small-thumbnail', 142, 82 , true );

//creating custom image size for feature-thumbnail
add_image_size( 'feature-thumbnail5', 454, 355 , true );

add_image_size( 'slidersmall', 45, 65 , true );

add_image_size( 'secondpostimg', 200, 145, true );

add_image_size( 'blogthumbnail', 100,100 , true );

   }  

/* End Thumbnail */

/* sidebar */

if ( function_exists('register_sidebar') ) {

  register_sidebar(array(

    'id' => 'default-sidebar',

    'name' => __('Default Sidebar','mm'),

    'description'   => __( 'Main sidebar that appears on the right.', 'mm' ),

    'before_widget' => '<aside id="%1$s" class="widget %2$s">',

    'after_widget'  => '</aside>',

    'before_title'  => '<div class="sidebar-widget-title"><span>',

    'after_title'   => '</span>'.'</div>',

  ) );

    //registering new custom sidebar for single post page
    register_sidebar(array(

        'id' => 'left-sidebar',

        'name' => __('Left Sidebar','mm'),

        'description'   => __( 'Main sidebar that appears on the left.', 'mm' ),

        'before_widget' => '<aside id="%1$s" class="widget %2$s">',

        'after_widget'  => '</aside>',

        'before_title'  => '<div class="sidebar-widget-title"><span>',

        'after_title'   => '</span>'.'</div>',

    ) );

 register_sidebar(array(

    'id' => 'footer-sidebar-1', 

    'name' => __('Footer Block 1','mm'),

    'description'   => __( 'Main sidebar that appears in the footer.', 'mm' ),

    'before_widget' => '<aside id="%1$s" class="footer-widgets-list %2$s">',

    'after_widget'  => '</aside>',

    'before_title'  => '<div class="widget-title"><h3>',

    'after_title'   => '</h3></div>',

  ) );

  register_sidebar(array(

    'id' => 'footer-sidebar-2',

    'name' => __('Footer Block 2','mm'),

    'description'   => __( 'Main sidebar that appears in the footer.', 'mm' ),

    'before_widget' => '<aside id="%1$s" class="footer-widgets-list %2$s">',

    'after_widget'  => '</aside>',

    'before_title'  => '<div class="widget-title"><h3>',

    'after_title'   => '</h3></div>',

  ) );

  register_sidebar(array(

    'id' => 'footer-sidebar-3',

    'name' => __('Footer Block 3','mm'),

    'description'   => __( 'Main sidebar that appears in the footer.', 'mm' ),

    'before_widget' => '<aside id="%1$s" class="footer-widgets-list %2$s">',

    'after_widget'  => '</aside>',

    'before_title'  => '<div class="widget-title"><h3>',

    'after_title'   => '</h3></div>',

  ) );

    register_sidebar(array(

    'id' => 'footer-sidebar-4',

    'name' => __('Footer Block 4','mm'),

    'description'   => __( 'Main sidebar that appears in the footer.', 'mm' ),

    'before_widget' => '<aside id="%1$s" class="footer-widgets-list %2$s">',

    'after_widget'  => '</aside>',

    'before_title'  => '<div class="widget-title"><h3>',

    'after_title'   => '</h3></div>',

  ) );

  }

 // Content Limit

 function the_content_limit($max_char, $more_link_text = ' ', $stripteaser = 0, $more_file = '') {

    $content = get_the_content($more_link_text, $stripteaser, $more_file);

    $content = apply_filters('the_content', $content);

    $content = str_replace(']]>', ']]&gt;', $content);

    $content = strip_tags($content);

  if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {

        $content = substr($content, 0, $espacio);

        $content = $content;

       echo "<p>";

        echo $content;

     echo "...<a href='"; the_permalink(); echo "'>"."</a>";

        echo "</p>";

   }   else {

      echo "<p>";

      echo $content;

      echo "...<a href='"; the_permalink(); echo "'>"."</a>";

      echo "</p>";

   }

}

// Pagination Start



if ( ! function_exists( 'my_pagination' ) ) :

	function my_pagination() {

		global $wp_query;



		$big = 999999999; // need an unlikely integer

		

		echo paginate_links( array(

			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),

			'format' => '?paged=%#%',

			'current' => max( 1, get_query_var('paged') ),

			'total' => $wp_query->max_num_pages

		) );

	}

endif;

//Pagination End

/* Google rich snippets Breadcrumbs for better SEO */
function m3_seo_breadcrumbs() {
  /* === OPTIONS === */
  $text['home']     = 'Home'; // text for the 'Home' link
  $text['category'] = 'Archive by Category "%s"'; // text for a category page
  $text['search']   = 'Search Results for "%s" Query'; // text for a search results page
  $text['tag']      = 'Posts Tagged "%s"'; // text for a tag page
  $text['author']   = 'Articles Posted by %s'; // text for an author page
  $text['404']      = 'Error 404'; // text for the 404 page
  $show_current   = 1; // 1 - show current post/page/category title in breadcrumbs, 0 - don't show
  $show_on_home   = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $show_home_link = 1; // 1 - show the 'Home' link, 0 - don't show
  $show_title     = 1; // 1 - show the title for the links, 0 - don't show
  $delimiter      = ' / '; // delimiter between crumbs
  $before         = '<span class="current">'; // tag before the current crumb
  $after          = '</span>'; // tag after the current crumb
  /* === END OF OPTIONS === */
  global $post;
  $home_link    = home_url('/');
  $link_before  = '<span typeof="v:Breadcrumb">';
  $link_after   = '</span>';
  $link_attr    = ' rel="v:url" property="v:title"';
  $link         = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
  $parent_id    = $parent_id_2 = $post->post_parent;
  $frontpage_id = get_option('page_on_front');
  if (is_home() || is_front_page()) {
    if ($show_on_home == 1) echo '<div class="breadcrumbs"><a href="' . $home_link . '">' . $text['home'] . '</a></div>';
  } else {
    echo '<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';
    if ($show_home_link == 1) {
      echo '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $text['home'] . '</a>';
      if ($frontpage_id == 0 || $parent_id != $frontpage_id) echo $delimiter;
    }
    if ( is_category() ) {
      $this_cat = get_category(get_query_var('cat'), false);
      if ($this_cat->parent != 0) {
        $cats = get_category_parents($this_cat->parent, TRUE, $delimiter);
        if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
        echo $cats;
      }
      if ($show_current == 1) echo $before . sprintf($text['category'], single_cat_title('', false)) . $after;

    } elseif ( is_search() ) {
      echo $before . sprintf($text['search'], get_search_query()) . $after;

    } elseif ( is_day() ) {
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
      echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $delimiter);
        if ($show_current == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
        echo $cats;
        if ($show_current == 1) echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $delimiter);
        $cats = str_replace('<a', $link_before . '<a' . $link_attr, $cats);
        $cats = str_replace('</a>', '</a>' . $link_after, $cats);
        if ($show_title == 0) $cats = preg_replace('/ title="(.*?)"/', '', $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current == 1) echo $delimiter . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current == 1) echo $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $delimiter;
        }
      }
      if ($show_current == 1) {
        if ($show_home_link == 1 || ($parent_id_2 != 0 && $parent_id_2 != $frontpage_id)) echo $delimiter;
        echo $before . get_the_title() . $after;
      }

    } elseif ( is_tag() ) {
      echo $before . sprintf($text['tag'], single_tag_title('', false)) . $after;

    } elseif ( is_author() ) {
      global $author;
      $userdata = get_userdata($author);
      echo $before . sprintf($text['author'], $userdata->display_name) . $after;

    } elseif ( is_404() ) {
      echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      echo get_post_format_string( get_post_format() );
    }
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page', 'mm') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
    echo '</div><!-- .breadcrumbs -->';
  }
} // end m3_seo_breadcrumbs() 

//breadcrumb menu end
/* JS */
require( get_template_directory() . '/includes/theme-js.php' );
// Theme Customizer 
require( get_template_directory() . '/includes/customizer.php' );
require( get_template_directory() . '/includes/customizer-css.php' );
// Load more 
require_once( get_template_directory() .'/js/scroll/load-more.php' );
// Theme Customizer style script
function customizer_style_init() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/includes/admin.css');
}
add_action( 'customize_controls_enqueue_scripts', 'customizer_style_init' );
?>