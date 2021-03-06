<?php
/*
Plugin Name: Magazine3 Widgets
Plugin URI: http://magazine3.com/resources
Description: Widgets to extend theme functionality of themes by Magazine3.com 
Author: Magazine3
Version: 0.1.0
Author URI: http://magazine3.com
*/
require_once( dirname(__FILE__) . '/js-css.php' );

 add_action( 'widgets_init', 'magazine3_catwithnumber' ); function magazine3_catwithnumber() {

  add_action('widgets_init', 'register_magazine3_catwithnumber_reg');
function register_magazine3_catwithnumber_reg() {
    register_widget('magazine3_catwithnumber_reg');
}

 } class magazine3_catwithnumber_reg extends WP_Widget { function magazine3_catwithnumber_reg() {
    $catwidget = array( 'classname' => 'widget-archive', 'description' => __('Displays list of category with numbers', 'open') );   $catcon = array( 'width' => 300, 'height' => 350, 'id_base' => 'widget-archive' );
    $this->WP_Widget( 'widget-archive', __('Magazine3: Category With Numbers', 'open'), $catwidget, $catcon ); }
  function widget( $args, $instance ) { global $wpdb; extract( $args );   ?>
    
    <div class="widget_container widget recent-post browsebycat">   
  <div class="widget-title">
  <h2>  <?php _e("Browse By Categories", "nt"); ?>  </h2>
  </div>
  <div class="sectioncont"> 
    <ul class="pane">
      <?php $magazine3_milliondollarcat = wp_list_categories('echo=0&show_count=1&title_li=&orderby=name&depth=1'); $magazine3_milliondollarcat = str_replace(array('(',')'), '', $magazine3_milliondollarcat); echo $magazine3_milliondollarcat; ?>
    </ul>
  </div>
  </div>  <?php } }
 
 
/*
 * Facebook Widget Starts 
 */
add_action('widgets_init', 'magazine3_facebook_like_load_widgets');
function magazine3_facebook_like_load_widgets() {
  register_widget('magazine3_Facebook_Like_Widget'); }
class magazine3_Facebook_Like_Widget extends WP_Widget {  
  function magazine3_Facebook_Like_Widget()
  { $widget_ops = array('classname' => 'facebook_like', 'description' => 'Adds support for Facebook Like Box.');
    $control_ops = array('id_base' => 'magazine3_facebook-like-widget');
    $this->WP_Widget('magazine3_facebook-like-widget', 'M3: Facebook Like Box', $widget_ops, $control_ops);
  } 
  function widget($args, $instance)
  { extract($args);
    $title = apply_filters('widget_title', $instance['title']);
    $page_url = $instance['page_url'];
    $width = $instance['width'];
    $color_scheme = $instance['color_scheme'];
    $show_faces = isset($instance['show_faces']) ? 'true' : 'false';
    $show_stream = isset($instance['show_stream']) ? 'true' : 'false';
    $show_header = isset($instance['show_header']) ? 'true' : 'false';
    $height = '65';
    if($show_faces == 'true') {
      $height = '270';
    }
    if($show_stream == 'true') {
      $height = '600';
    }
    if($show_header == 'true') {
      $height = '600';
    }   
     
    if($page_url): ?> <aside class="magazine3_fbwidget widget">
        <iframe src="http://www.facebook.com/plugins/likebox.php?href=<?php echo urlencode($page_url); ?>&amp;width=<?php echo $width; ?>&amp;colorscheme=<?php echo $color_scheme; ?>&amp;show_faces=<?php echo $show_faces; ?>&amp;stream=<?php echo $show_stream; ?>&amp;header=<?php echo $show_header; ?>&amp;height=<?php echo $height; ?>" class="fbsocialwidget" style="border:0px solid white; overflow:hidden; border:none; overflow:hidden; width:264px; height: <?php echo $height; ?>px;"></iframe>
 </aside>
    <?php endif;
  }
  function update($new_instance, $old_instance)
  { $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['page_url'] = $new_instance['page_url'];
    $instance['width'] = $new_instance['width'];
    $instance['color_scheme'] = $new_instance['color_scheme'];
    $instance['show_faces'] = $new_instance['show_faces'];
    $instance['show_stream'] = $new_instance['show_stream'];
    $instance['show_header'] = $new_instance['show_header'];
    return $instance;
  }
  function form($instance)
  {
    $defaults = array( 'page_url' => 'http://www.facebook.com/pages/Magazine3/145942342122558', 'width' => '300', 'color_scheme' => 'light', 'show_faces' => 'on', 'show_stream' => false, 'show_header' => false);
    $instance = wp_parse_args((array) $instance, $defaults); ?>
 
    <p>
      <label for="<?php echo $this->get_field_id('page_url'); ?>">Facebook Page URL:</label>
      <input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('page_url'); ?>" name="<?php echo $this->get_field_name('page_url'); ?>" value="<?php echo $instance['page_url']; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('width'); ?>">Width:</label>
      <input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('width'); ?>" name="<?php echo $this->get_field_name('width'); ?>" value="<?php echo $instance['width']; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('color_scheme'); ?>">Color Scheme:</label> 
      <select id="<?php echo $this->get_field_id('color_scheme'); ?>" name="<?php echo $this->get_field_name('color_scheme'); ?>" class="widefat" style="width:100%;">
        <option <?php if ('light' == $instance['color_scheme']) echo 'selected="selected"'; ?>>light</option>
        <option <?php if ('dark' == $instance['color_scheme']) echo 'selected="selected"'; ?>>dark</option>
      </select>
    </p>
    <p>
      <input class="checkbox" type="checkbox" <?php checked($instance['show_faces'], 'on'); ?> id="<?php echo $this->get_field_id('show_faces'); ?>" name="<?php echo $this->get_field_name('show_faces'); ?>" /> 
      <label for="<?php echo $this->get_field_id('show_faces'); ?>">Show faces</label>
    </p>
    <p>
      <input class="checkbox" type="checkbox" <?php checked($instance['show_stream'], 'on'); ?> id="<?php echo $this->get_field_id('show_stream'); ?>" name="<?php echo $this->get_field_name('show_stream'); ?>" /> 
      <label for="<?php echo $this->get_field_id('show_stream'); ?>">Show stream</label>
    </p>
    <p>
      <input class="checkbox" type="checkbox" <?php checked($instance['show_header'], 'on'); ?> id="<?php echo $this->get_field_id('show_header'); ?>" name="<?php echo $this->get_field_name('show_header'); ?>" /> 
      <label for="<?php echo $this->get_field_id('show_header'); ?>">Show facebook header</label>
    </p>
  <?php   } }
    
/*
 * Facebook Widget Ends 
 */
    
/*
 * Flickr Widget Starts 
 */
 
 
 
 
add_action('widgets_init', 'magazine3_flickr_load_widgets');
function magazine3_flickr_load_widgets()
{ register_widget('magazine3_Flickr_Widget');
}
class magazine3_Flickr_Widget extends WP_Widget {
    function magazine3_Flickr_Widget()
  { $widget_ops = array('classname' => 'flickr', 'description' => 'The most recent photos from flickr.');
    $control_ops = array('id_base' => 'flickr-widget');
    $this->WP_Widget('flickr-widget', 'M3: Flickr Photos', $widget_ops, $control_ops);
  }
  function widget($args, $instance)
  {
    extract($args);
    $title = apply_filters('widget_title', $instance['title']);
    $screen_name = $instance['screen_name'];
    $number = $instance['number'];
    echo $before_widget;
    if($title) {
      echo $before_title.$title.$after_title;
    }   
    if($screen_name && $number) {
      $api_key = '448ea336701176e0aae7da2c26f723f7';      
      @$person = wp_remote_get('http://api.flickr.com/services/rest/?method=flickr.people.findByUsername&api_key='.$api_key.'&username='.$screen_name.'&format=json');
      @$person = trim($person['body'], 'jsonFlickrApi()');
      @$person = json_decode($person);      
      if($person->user->id) {
        $photos_url = wp_remote_get('http://api.flickr.com/services/rest/?method=flickr.urls.getUserPhotos&api_key='.$api_key.'&user_id='.$person->user->id.'&format=json');
        $photos_url = trim($photos_url['body'], 'jsonFlickrApi()');
        $photos_url = json_decode($photos_url);     
        $photos = wp_remote_get('http://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key='.$api_key.'&user_id='.$person->user->id.'&per_page='.$number.'&format=json');
        $photos = trim($photos['body'], 'jsonFlickrApi()');
        $photos = json_decode($photos);
        ?>
        <ul class='flickr-photos'>
          <?php foreach($photos->photos->photo as $photo): $photo = (array) $photo; ?>
          <li class='flickr-photo'>
            <a href='<?php echo $photos_url->user->url; ?><?php echo $photo['id']; ?>' target='_blank'>
              <img src='<?php $url = "http://farm" . $photo['farm'] . ".static.flickr.com/" . $photo['server'] . "/" . $photo['id'] . "_" . $photo['secret'] . 'mm' . ".jpg"; echo $url; ?>' alt='<?php echo $photo['title']; ?>' />
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
        <?php
      } else {
        echo '<p>Invalid flickr username.</p>';
      }
    }
    echo $after_widget;
  }
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;

    $instance['title'] = strip_tags($new_instance['title']);
    $instance['screen_name'] = $new_instance['screen_name'];
    $instance['number'] = $new_instance['number'];
    return $instance;
  }
  function form($instance)
  {
    $defaults = array('title' => 'Photos from Flickr', 'screen_name' => '', 'number' => 5);
    $instance = wp_parse_args((array) $instance, $defaults); ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('screen_name'); ?>">Screen name:</label>
      <input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('screen_name'); ?>" name="<?php echo $this->get_field_name('screen_name'); ?>" value="<?php echo $instance['screen_name']; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('number'); ?>">Number of photos to show:</label>
      <input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" value="<?php echo $instance['number']; ?>" />
    </p>
  <?php
  }
}


/*
 * Flickr Widget Ends 
 */
    
/*
 *   Tabs Starts 
 */
 
 
 add_action('widgets_init', 'magazine3_pyre_tabs_load_widgets');

function magazine3_pyre_tabs_load_widgets()
{
  register_widget('magazine3_Pyre_Tabs_Widget');
}

class magazine3_Pyre_Tabs_Widget extends WP_Widget {
  
  function magazine3_Pyre_Tabs_Widget()
  {
    $widget_ops = array('classname' => 'pyre_tabs', 'description' => 'Popular, comments and tags tabbed widget.');

    $control_ops = array('id_base' => 'pyre_tabs-widget');

    $this->WP_Widget('pyre_tabs-widget', 'M3: Tabs Widget', $widget_ops, $control_ops);
  }
  
  function widget($args, $instance)
  {
    extract($args);
    
    $posts = $instance['posts'];
    $comments = $instance['comments'];
    $images = true;
    
    echo $before_widget;
    
    if($title) { 
      echo $before_title.$title.$after_title;
    }   
    ?> 
    <!-- BEGIN WIDGET -->
    <div class="tabs-wrapper">
      
      <ul class="tabs">
        <li><a href="#tab1"><?php _e('Popular', "mm"); ?></a></li>
        <li><a href="#tab2"><?php _e('Comments', "mm"); ?></a></li>
        <li><a href="#tab3"><?php _e('Tags', "mm"); ?></a></li>
      </ul>
      
      <div class="tabs_container">
      
        <div id="tab1" class="tab_content">
          <?php
          $popular_posts = new WP_Query('showposts='.$posts.'&orderby=comment_count&order=DESC');
          if($popular_posts->have_posts()): ?>
            <?php while($popular_posts->have_posts()): $popular_posts->the_post(); ?>
            <?php
            if(has_post_format('video') || has_post_format('audio') || has_post_format('gallery')) {
              $icon = '<span class="' . get_post_format($post->ID) . '-icon"></span>';
            } else {
              $icon = '';
            }
            ?>
            <div class="block-item-small-tabs">
             
              <div class="block-image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'sidebar-thumb' ); ?></a></div>
            <div class="block-image-r">      
              <h2><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2>
         
            </div>
                           
                        </div>   
            <?php endwhile; ?>
          <?php endif; ?>
        </div> 
        
        <div id="tab2" class="tab_content">
          <?php
          $number = $instance['comments'];
          global $wpdb;
          $recent_comments = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_author_email, comment_date_gmt, comment_approved, comment_type, comment_author_url, SUBSTRING(comment_content,1,110) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' ORDER BY comment_date_gmt DESC LIMIT $number";
          $the_comments = $wpdb->get_results($recent_comments);
          foreach ($the_comments as $comment) { ?>
            <div class="block-item-small-tabs">
            <div class="block-image"> <?php echo get_avatar($comment, '50'); ?>
            </div>    <div class="block-image-r">
                              <h2><?php echo strip_tags($comment->comment_author); ?> says:</h2>
              <a class="comment-text-side" href="<?php echo get_permalink($comment->ID); ?>#comment-<?php echo $comment->comment_ID; ?>" title="<?php echo strip_tags($comment->comment_author); ?> on <?php echo $comment->post_title; ?>"><?php echo magazine3_string_limit_words(strip_tags($comment->com_excerpt), 12); ?>...</a>
            </div>  </div>
          <?php } ?>
        </div>
        
        <div id="tab3" class="tab_content"> 
          <p class='tag_cloud'>
          <?php wp_tag_cloud(); ?>
          </p>
        </div>
        
       
    
    </div>
    </div>
    <!-- END WIDGET -->
    <?php
    echo $after_widget;
  }
  
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    
    $instance['posts'] = $new_instance['posts'];
    $instance['comments'] = $new_instance['comments'];
    $instance['show_images'] = true;
    
    return $instance;
  }

  function form($instance)
  {
    $defaults = array('posts' => 3, 'comments' => '3');
    $instance = wp_parse_args((array) $instance, $defaults); ?>
    <p>
      <label for="<?php echo $this->get_field_id('posts'); ?>">Number of posts:</label>
      <input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('posts'); ?>" name="<?php echo $this->get_field_name('posts'); ?>" value="<?php echo $instance['posts']; ?>" />
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('comments'); ?>">Number of comments:</label>
      <input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('comments'); ?>" name="<?php echo $this->get_field_name('comments'); ?>" value="<?php echo $instance['comments']; ?>" />
    </p>
  <?php }
}
 
 
/*
 *   Tabs End
 */
 
 
 
 
 /*
 *   Advertisment Starts
 */
  
 
 class magazine3_magazine3adwidget extends WP_Widget{
  function magazine3_magazine3adwidget() {
    $noidea = array('description' => 'Lets you add Html Ad code' );
    parent::WP_Widget(false, __('M3: Advertisment Widget', "mm"),$noidea);      
  }
  function widget($args, $instance) {  
    $title = $instance['title'];
    $advertcode = $instance['advertcode'];
        echo '<aside class="adspace-widget widget">';
    if($title != '')
      echo '<h3 class="widget-title">'.$title.'</h3>';
    if($advertcode != ''){    ?>
    <?php echo $advertcode; ?>    
    <?php } echo '</aside>'; }
  function update($new_instance, $old_instance) {                
    return $new_instance; } function form($instance) {      $title = esc_attr($instance['title']); $advertcode = esc_attr($instance['advertcode']); ?>
      <p>     <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title: (optional)', "mm"); ?></label>  <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />  </p>
    <p>  <label for="<?php echo $this->get_field_id('advertcode'); ?>"><?php _e('Paste  Your Code Below:', "mm"); ?></label>
            <textarea name="<?php echo $this->get_field_name('advertcode'); ?>" class="widefat" style="height: 170px !important;" id="<?php echo $this->get_field_id('advertcode'); ?>"><?php echo $advertcode; ?></textarea>        </p>
        <?php } }
 
          add_action('widgets_init', 'register_magazine3_magazine3adwidget');
function register_magazine3_magazine3adwidget() {
    register_widget('magazine3_magazine3adwidget');
}

 /*
 *   Advertisment Ends
 */       
  /*
  *   Recent posts Starts
  */       
 add_action('widgets_init', 'magazine3_pyre_posts_load_widgets');

function magazine3_pyre_posts_load_widgets()
{
  register_widget('magazine3_Pyre_Posts_Widget');
}

class magazine3_Pyre_Posts_Widget extends WP_Widget {
  
  function magazine3_Pyre_Posts_Widget()
  {
    $widget_ops = array('classname' => 'pyre_posts', 'description' => '');

    $control_ops = array('id_base' => 'pyre_posts-widget');

    $this->WP_Widget('pyre_posts-widget', 'M3: Recent Posts', $widget_ops, $control_ops);
  }
  
  function widget($args, $instance)
  {
    extract($args);
    
    $title = $instance['title'];
    $post_type = 'all';
    $categories = $instance['categories'];
    $posts = $instance['posts'];
    $images = true;
    $rating = true;
    
    echo $before_widget;
    ?>
    <!-- BEGIN WIDGET -->
    <?php
    if($title) {
      echo $before_title.$title.$after_title;
    }
    ?>
    
    <?php
    $post_types = get_post_types();
    unset($post_types['page'], $post_types['attachment'], $post_types['revision'], $post_types['feedback'], $post_types['nav_menu_item']);
    
    if($post_type == 'all') {
      $post_type_array = $post_types;
    } else {
      $post_type_array = $post_type;
    }
    ?>
    
    <?php
    $recent_posts = new WP_Query(array(
      'showposts' => $posts,
      'post_type' => $post_type_array,
      'cat' => $categories,
    ));
    ?>
  <div class="m3-recent-post-wrapper">        
    <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
      <div class="block-item-small">
        
        <div class="block-image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'sidebar-thumb' ); ?></a></div>
      
        <div class="block-image-r"> <h2><a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'><?php the_title(); ?></a></h2><span class="block-meta"><?php the_time(get_option('date_format')); ?>, <?php comments_popup_link(); ?></span> </div>
      
      </div>
    <?php endwhile; ?>
  </div>
    <!-- END WIDGET -->
    <?php
    echo $after_widget;
  }
  
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    
    $instance['title'] = $new_instance['title'];
    $instance['post_type'] = 'all';
    $instance['categories'] = $new_instance['categories'];
    $instance['posts'] = $new_instance['posts'];
    $instance['show_images'] = true;
    $instance['show_rating'] = true;
    
    return $instance;
  }

  function form($instance)
  {
    $defaults = array('title' => 'Recent Posts', 'post_type' => 'all', 'categories' => 'all', 'posts' => 3);
    $instance = wp_parse_args((array) $instance, $defaults); ?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
      <input class="widefat" style="width: 216px;" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
    </p>
    
    <p>
      <label for="<?php echo $this->get_field_id('categories'); ?>">Filter by Category:</label> 
      <select id="<?php echo $this->get_field_id('categories'); ?>" name="<?php echo $this->get_field_name('categories'); ?>" class="widefat categories" style="width:100%;">
        <option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>>all categories</option>
        <?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
        <?php foreach($categories as $category) { ?>
        <option value='<?php echo $category->term_id; ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo $category->cat_name; ?></option>
        <?php } ?>
      </select>
    </p>
    
    <p>
      <label for="<?php echo $this->get_field_id('posts'); ?>">Number of posts:</label>
      <input class="widefat" style="width: 30px;" id="<?php echo $this->get_field_id('posts'); ?>" name="<?php echo $this->get_field_name('posts'); ?>" value="<?php echo $instance['posts']; ?>" />
    </p>
  <?php }
}

 /*
 *   Recent posts Ends
 */       
 /*
 *   Recent Comments Starts
 */       
class magazine3_thankstowz_Recent_Comments extends WP_Widget {
  
  function magazine3_thankstowz_Recent_Comments() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'recent-comments', 'description' => 'Recent Comments with Gravatar' );

    /* Widget control settings. */
    $control_ops = array( 'id_base' => 'thankstowz-recent-comments' );

    /* Create the widget. */
    $this->WP_Widget( 'thankstowz-recent-comments', 'M3: Recent Comments', $widget_ops, $control_ops );
  }
  
  function widget( $args, $instance ) {
    extract( $args );

    /* User-selected settings. */
    $title = apply_filters('widget_title', $instance['title'] );
    $show_count = $instance['show_count'];
    $show_avatar = isset( $instance['show_avatar'] ) ? $instance['show_avatar'] : false;
    $avatar_size = $instance['avatar_size'];
    $excerpt_length = $instance['excerpt_length'];

    /* Before widget (defined by themes). */
    echo $before_widget;

    /* Title of widget (before and after defined by themes). */
    if ( $title )
      echo $before_title . $title . $after_title;
        
      $comments = get_comments(array(
        'number' => $show_count,
        'status' => 'approve',
        'type' => 'comment'
      ));
      
      echo '<ul class="recent-comments-list">';
      
      foreach($comments as $comment) :
        
        $comm_title = get_the_title($comment->comment_post_ID);
        $comm_link = get_comment_link($comment->comment_ID);
      ?>
    
    <li>
      <?php
        if ( $show_avatar ) {
          echo '<div class="cover-border"><a href="' . $comm_link . '">' . get_avatar($comment,$size=$avatar_size) . '</a></div>';
        }
      ?>
      <a href="<?php echo($comm_link)?>"><?php echo($comment->comment_author)?>:</a> <?php echo substr(get_comment_excerpt( $comment->comment_ID ), 0, $excerpt_length); ?>&hellip;<div class="clear"></div>
    </li> 
    
      <?php 
      endforeach;
      
      echo '</ul>';
    

    /* After widget (defined by themes). */
    echo $after_widget;
  }
  
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    /* Strip tags (if needed) and update the widget settings. */
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['show_count'] = $new_instance['show_count'];
    $instance['show_avatar'] = $new_instance['show_avatar'];
    $instance['avatar_size'] = $new_instance['avatar_size'];
    $instance['excerpt_length'] = $new_instance['excerpt_length'];

    return $instance;
  }
  
  function form( $instance ) {
 
    /* Set up some default widget settings. */
    $defaults = array( 'title' => 'Recent Comments', 'show_count' => 3, 'show_avatar' => true, 'avatar_size' => 40, 'excerpt_length' => 60 );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label><br />
      <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text" size="35"/>
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'show_count' ); ?>">Show:</label>
      <select id="<?php echo $this->get_field_id( 'show_count' ); ?>" name="<?php echo $this->get_field_name( 'show_count' ); ?>">
        <?php
        for ( $i = 1; $i < 11; $i++ ) {
          echo '<option' . ( $i == $instance['show_count'] ? ' selected="selected"' : '' ) . '>' . $i . '</option>';
        }
        ?>
      </select> comments
    </p>
    
    <p>
      <input class="checkbox" type="checkbox" <?php checked( $instance['show_avatar'], 'on' ); ?> id="<?php echo $this->get_field_id( 'show_avatar' ); ?>" name="<?php echo $this->get_field_name( 'show_avatar' ); ?>" />
      <label for="<?php echo $this->get_field_id( 'show_avatar' ); ?>">Show avatar?</label>
    </p>
    
    <p>
      <label for="<?php echo $this->get_field_id( 'avatar_size' ); ?>">Avatar size:</label>
      <input id="<?php echo $this->get_field_id( 'avatar_size' ); ?>" name="<?php echo $this->get_field_name( 'avatar_size' ); ?>" value="<?php echo $instance['avatar_size']; ?>" type="text" size="4" /> px
    </p>
    
    <p>
      <label for="<?php echo $this->get_field_id( 'excerpt_length' ); ?>">Comment excerpt:</label>
      <input id="<?php echo $this->get_field_id( 'excerpt_length' ); ?>" name="<?php echo $this->get_field_name( 'excerpt_length' ); ?>" value="<?php echo $instance['excerpt_length']; ?>" type="text" size="4" /> characters
    </p>
    
    <?php
  }
}

function magazine3_thankstowz_register_rc_widget() {
  register_widget('magazine3_thankstowz_Recent_Comments');
}
add_action('widgets_init', 'magazine3_thankstowz_register_rc_widget');

 /*
 *   Recent Comments Ends
 */       
 /*
 *   Google+ Starts
 */       
class magazine3_magazine3_PlusWidget extends WP_Widget
{
  protected $_uuid    = 'magazine3_magazine3_PlusWidget';
  protected $_name    = 'M3: Google+ Badge';
  protected $_args    = array(
    'description' => 'Google+ Page badge on the sidebar'
  );

  protected $sizes = array(
 
    'smallbadge'  => 'Standard Badge',
    'badge'   => 'Large Badge'
  );

  function __construct()
  {
    parent::WP_Widget($this->_uuid, $this->_name, $this->_args);
  }

  function widget($args, $instance)
  {
    extract($args);
    $title = apply_filters( 'widget_title', $instance['title'] );

     
     

    if($instance['size'] == 'small' || $instance['size'] == 'medium' || $instance['size'] == 'large')
    {
     
    }else
    {
      echo '<aside class="googleplus_wrapper widget">';
    
      echo '<script type="text/javascript">';
      echo '(function(){';
        echo 'var po = document.createElement("script");';
        echo 'po.type = "text/javascript";';
        echo 'po.async = true;';
        echo 'po.src = "https://apis.google.com/js/plusone.js";';
        echo 'var s = document.getElementsByTagName("script")[0];';
        echo 's.parentNode.insertBefore(po, s);';
      echo '})();</script>';

      switch($instance['html5'])
      {
        case false:
          echo sprintf(' <g:plus href="https://plus.google.com/%1$s" size="%2$s"></g:plus>',$instance['id'], $instance['size']);
        break;
        case true:
        default:
          echo sprintf('<div class="g-plus" data-href="https://plus.google.com/%1$s" data-size="%2$s"></div> ',$instance['id'], $instance['size']);
        break;
      }
    }
echo '</aside>';
 
  }

  function update($new_instance, $old_instance)
  {
    $old_instance['title']  = strip_tags($new_instance['title']);
    $old_instance['id'] = $new_instance['id'];
    $old_instance['size'] = $new_instance['size'];
    $old_instance['html5']  = empty($new_instance['html5']) ? false : true;

    return $old_instance;
  }

  function form($instance)
  {
     
    $size = 'badge';
    $id = '108317477536973659571';

    if($instance)
    {
       
      $size = esc_attr($instance['size']);
      $id = esc_attr($instance['id']);
      $html5  = $instance['html5'];
    }

    echo '<p>';
       
      //Badge ID
      echo sprintf('<label for="%1$s">%2$s</label>', $this->get_field_id('id'), __('Page ID:', "mm"));
      echo sprintf('<input class="widefat" id="%1$s" name="%2$s" type="text" value="%3$s" />', $this->get_field_id('id'), $this->get_field_name('id'), $id);
      
      //Badge Size
      echo sprintf('<label for="%1$s">%2$s</label>', $this->get_field_id('size'), __('Size:', "mm"));
      echo sprintf('<select class="widefat" id="%1$s" name="%2$s">', $this->get_field_id('size'), $this->get_field_name('size'));

      foreach($this->sizes as $key => $value)
      {
        echo sprintf('<option value="%1$s" %2$s>%3$s</option>', $key, selected($size, $key , false), __($value));
        //echo '<option value="' . $key . '" ' . selected($size, $key , false) . '>' . __($value) . '</option>';
      }

      echo '</select>';

      //HTML5 Valid
 
    echo '</p>';
    return;
  }
}

/*
  * Add Actions and were done.
*/
add_action('widgets_init', create_function( '', 'register_widget("magazine3_magazine3_PlusWidget");'));

 /*
 *   Google+ Ends
 */       
 /*
 *   Popular Starts
 */       
 // Popular posts
 class magazine3_mostpopuler extends WP_Widget { function magazine3_mostpopuler() { parent::WP_Widget('mostpopular', 'M3: Popular Posts (by comments)', array('description' => 'List of most commented posts')); }
  public static function head(){ $options = get_option('magazine3_mostpopuler'); } function widget($args, $instance){ global $wpdb; $time_start = date('c', strtotime($instance['lapse'], current_time('timestamp', 0)));
    $classes = preg_replace('/\s\s+/', '', preg_replace('~[,.]~', ' ', $instance['classes'])); echo $args['before_widget']; echo $args['before_title'] . $instance['title'] . $args['after_title'];
    $popular_posts =  $wpdb->get_results("SELECT id, post_title, post_status, guid, COUNT(comment_post_ID) AS post_comment_count FROM " . $wpdb->prefix . "posts JOIN " . $wpdb->prefix . "comments ON id = comment_post_ID WHERE post_status = 'publish' AND comment_approved = 1 AND comment_date > '" . $time_start . "' GROUP BY id ORDER BY post_comment_count DESC, post_date DESC LIMIT " . $instance['number_posts']);
    $classes = explode(" ", $classes); if(!empty($popular_posts)){ ?> <ul class="mostpopular"> <?php foreach($popular_posts as $k => $post){ ?><li class="mostpopular_li color<?php echo $k; ?>"><a href="<?php echo get_permalink($post->id); ?>" class="barlinko"><?php echo get_the_title($post->id); ?></a><span style="display: inline-block;width:100%;  margin-left: -6px;"><span style="float: left;font-size:10px;color:#f5f5f5;"> </span><span style="float: right;" class="barco"><a href="<?php echo get_permalink($post->id); ?>#comments" class="thethingwithc"><?php echo number_format($post->post_comment_count); ?> comments</a></span><span class="cb"></span></span></li>
<?php } ?></ul> <?php } echo $args['after_widget']; } function update($new_instance, $old_instance) { if (!get_option('magazine3_mostpopuler')){ add_option('magazine3_mostpopuler', $options); } else {
update_option('magazine3_mostpopuler', $options); } $instance = $old_instance; $instance['title'] = $new_instance['title']; $instance['lapse'] = $new_instance['lapse']; if(strtotime($instance['lapse']) < 1 || current_time('timestamp') < strtotime($instance['lapse'], current_time('timestamp'))){
   $instance['lapse'] = '-30 days'; } $instance['classes'] = preg_replace('#[^0-9a-z,_-]#', '', $new_instance['classes']); $instance['number_posts'] = (int) $new_instance['number_posts'];     return $instance; } function form($instance) { $default = array( 'title' => 'Most Popular Posts', 'lapse' => '-30 days', 'classes' => '0,1,2,3,4', 'number_posts' => '5', );
    $instance = wp_parse_args($instance, $default); $instance['classes'] = implode(', ', explode(',', $instance['classes'])); $options = get_option('magazine3_mostpopuler'); $time_start = date('c', strtotime($instance['lapse'], current_time('timestamp', 0))); ?>
<p><label for="<?php echo $this->get_field_id('title'); ?>">Title of Widget<input name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" type="text" class="widefat" value="<?php echo esc_attr($instance['title']); ?>" /></label>
</p><p><label for="<?php echo $this->get_field_id('lapse'); ?>">From Last...How many days?<input name="<?php echo $this->get_field_name('lapse'); ?>" id="<?php echo $this->get_field_id('lapse'); ?>" type="text" class="widefat" value="<?php echo esc_attr($instance['lapse']); ?>" /></label><br /></p>
<p><label for="<?php echo $this->get_field_id('number_posts'); ?>">How many posts to show?<input name="<?php echo $this->get_field_name('number_posts'); ?>" id="<?php echo $this->get_field_id('number_posts'); ?>" type="text" size="3" value="<?php echo esc_attr($instance['number_posts']); ?>" /></label></p>
<?php } } add_action('widgets_init', 'magazine3_mostpopular_register_widgets'); function magazine3_mostpopular_register_widgets(){  add_action('wp_head', array('magazine3_mostpopuler', 'head')); 

add_action('widgets_init', 'register_magazine3_mostpopuler');
function register_magazine3_mostpopuler() {
    register_widget('magazine3_mostpopuler');
}


} function magazine3_mostpopular_widget($instance){ if(!is_array($instance)) $instance = wp_parse_args($instance); return magazine3_mostpopuler::widget(NULL, $instance); } function magazine3_most_viewed_bars_widget($instance){  if(!is_array($instance)) $instance = wp_parse_args($instance);  return MostViewedBars::widget(NULL, $instance); }


 /*
 *   Popular Ends
 */       

 /*
 *   Most views Start
 */       


class magazine3_RandomPostWidget extends WP_Widget
{
  function magazine3_RandomPostWidget()
  {
    $widget_ops = array('classname' => 'magazine3_RandomPostWidget', 'description' => 'Displays 7 Most Viewed posts.' );
    $this->WP_Widget('magazine3_RandomPostWidget', 'M3: Popular posts (by Views)', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
   if (!empty($title))
   echo $before_title . $title . $after_title;
 ?>
   <div class="block-item-small-view popularviewbg"><?php $custom_values = get_post_meta($post->ID, 'post_views_count'); ?>

<ol>
<?php 
$args = array(
    'meta_key'=>'post_views_count',
    'post_status'=>'publish',
    'post_type'=>'post',
 'orderby'=> 'meta_value_num',
 'order' => 'DESC',
 'posts_per_page'=>'7'
);
query_posts($args);
if(have_posts()) : while (have_posts()) : the_post(); ?>

 <li class="block-image-viewed">
 <span class="block-image-viewed-l">   <a href='<?php the_permalink(); ?>' title='<?php the_title(); ?>'> <?php the_title(); ?></a>
 <span class="block-image-viewed-views"> - <?php echo magazine3_getPostViews(get_the_ID()); ?> <?php _e("views", "mm"); ?></span></span> 
 <span class="block-image-viewed-r"> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_post_thumbnail( 'popular-thumb' ); ?></a> </span> 
 </li> 
 
<?php endwhile; else:      //Do Whatever     
endif; wp_reset_query(); ?>
</ol>
</div>  
     
 <?php
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("magazine3_RandomPostWidget");') );
 /*
 *   Most views Ends
 */       
/*
Credit goes to Syafz of inspiredmagz.com
Author URI: http://inspiredmagz.com/
License: GPLv2
*/
 
class magazine3_multiplesocialwidget extends WP_Widget {

  function magazine3_multiplesocialwidget() {
    $widget_ops = array('classname' => 'magazine3_multiplesocialwidget', 'description' => __('Your social stats in sidebar.', "mm"));
    $control_ops = array('width' => 250, 'height' => 350);
    $this->WP_Widget('magazine3_multiplesocialwidget', __('M3: Social Stats Widget', "mm"), $widget_ops, $control_ops);
  }

          
  function widget( $args, $instance ) { 
    extract($args); 
    $feedburner_id = $instance['feedburner_id'];
    $twitter_id = $instance['twitter_id'];
    $facebook_id = $instance['facebook_id'];
    $googleplus_id = $instance['googleplus_id'];
    $fbheight_id = $instance['fbheight_id'];
    $recommend_id = $instance['recommend_id'];
    $emailtext_id = $instance['emailtext_id'];
   
 
    $fbboxcolor_id = $instance['fbboxcolor_id'];
    $gpluscolor_id = $instance['gpluscolor_id'];
    $twitcolor_id = $instance['twitcolor_id'];
    $emailcolor_id = $instance['emailcolor_id'];
    $othercolor_id = $instance['othercolor_id'];
    ?>
    
<!--begin of social widget--> 
<aside class="widget magazine3_multiplesocialwidget-wrapper">

<div class="magazine3_multiplesocialwidget-id"> <!-- Begin Widget -->

<div class="magazine3_multiplesocialwidget-id-widget" style="background: #EBEBEB; padding: 1px 8px 1px 3px;text-align: left;border-image: initial;font-size:10px;font-family: Arial,Helvetica,sans-serif; border-bottom: 1px solid #E6E6E6;"> 
Connect with us on social networks</div>

  <div class="fb-likebox" style="background: <?php echo $fbboxcolor_id; ?>;"> <!-- Facebook -->
    <iframe src="//www.facebook.com/plugins/like.php?href=<?php echo $facebook_id; ?>&amp;send=false&amp;layout=standard&amp;width=245&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=<?php echo $fbheight_id; ?>&amp;appId=234513819928295" style=" overflow:hidden; border:0px solid white; width:245px; height:<?php echo $fbheight_id; ?>px;"></iframe>
  </div>
     
    <div class="twitterbg" style="background: <?php echo $twitcolor_id; ?>;"> <!-- Twitter -->
          <iframe title="" style="overflow:hidden; width:264px; border:0px solid white; height: 20px;" class="twitter-follow-button" src="http://platform.twitter.com/widgets/follow_button.html#_=1319978796351&amp;align=&amp;button=blue&amp;id=twitter_tweet_button_0&amp;lang=en&amp;link_color=&amp;screen_name=<?php echo $twitter_id; ?>&amp;show_count=&amp;show_screen_name=&amp;text_color="></iframe>
  </div>
    
 
  <div class="googleplus" style="background: <?php echo $gpluscolor_id; ?>;"> <!-- Google -->
    <span><?php echo $recommend_id; ?></span><div class="g-plusone"></div>
  
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script> 
  </div>



  <div class="email-news-subscribe" style="background: <?php echo $emailcolor_id; ?>;"> <!-- Email Subscribe -->
    <div class="email-box">
      <form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $feedburner_id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">  
        <input class="email" type="text" style="width:177px; font-size: 12px;"   name="email" value="<?php echo $emailtext_id; ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />    
        <input type="hidden" value="<?php echo $feedburner_id; ?>" name="uri" />
        <input type="hidden" name="loc" value="en_US" />
        <input class="subscribe" name="commit" type="submit" value="Subscribe" /> 
      </form>
    </div>
  </div>

<div class="get-im" style="background: #EBEBEB; padding: 1px 8px 1px 3px; border-image: initial;font-size:10px;font-family: Arial,Helvetica,sans-serif;height:8px">

 </div></div> <!-- End Widget -->
 </aside>
<!--end of social widget--> 
    <?php }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;    
    $instance['feedburner_id'] = $new_instance['feedburner_id'];
    $instance['twitter_id'] =  $new_instance['twitter_id'];
    $instance['facebook_id'] =  $new_instance['facebook_id'];
    $instance['googleplus_id'] =  $new_instance['googleplus_id'];
    $instance['fbheight_id'] =  $new_instance['fbheight_id'];
    $instance['recommend_id'] =  $new_instance['recommend_id'];
    $instance['emailtext_id'] =  $new_instance['emailtext_id'];
    $instance['fbboxcolor_id'] =  $new_instance['fbboxcolor_id'];
    $instance['gpluscolor_id'] =  $new_instance['gpluscolor_id'];
    $instance['twitcolor_id'] =  $new_instance['twitcolor_id'];
    $instance['emailcolor_id'] =  $new_instance['emailcolor_id'];
    $instance['othercolor_id'] =  $new_instance['othercolor_id'];
    return $instance;
  }

  function form( $instance ) { 
    $instance = wp_parse_args( (array) $instance, array( 'feedburner_id' => 'm3updates', 'twitter_id' => 'm3themes', 'facebook_id' => 'http://www.facebook.com/pages/Magazine3/145942342122558', 'fbheight_id' => '80', 'recommend_id' => 'Recommend on Google', 'emailtext_id' => 'Enter your email' , 'fbboxcolor_id' => '#ECEEF5', 'gpluscolor_id' => '#fff', 'twitcolor_id' => '#DBECF4', 'emailcolor_id' => '#fdead2', 'othercolor_id' => '#D8E6EB', 'googleplus_id' => '108317477536973659571'  ) );
    $feedburner_id = $instance['feedburner_id'];
    $twitter_id = format_to_edit($instance['twitter_id']);
    $facebook_id = format_to_edit($instance['facebook_id']); 
    $googleplus_id = format_to_edit($instance['googleplus_id']); 
    $fbheight_id = format_to_edit($instance['fbheight_id']);
    $recommend_id = format_to_edit($instance['recommend_id']);
    $emailtext_id = format_to_edit($instance['emailtext_id']);
    $fbboxcolor_id = format_to_edit($instance['fbboxcolor_id']);
    $gpluscolor_id = format_to_edit($instance['gpluscolor_id']);
    $twitcolor_id = format_to_edit($instance['twitcolor_id']);
    $emailcolor_id = format_to_edit($instance['emailcolor_id']);
    $othercolor_id = format_to_edit($instance['othercolor_id']);
  ?>      
    <center><strong><u>Social Profiles Setting</u></strong></center><br />
    <p><label for="<?php echo $this->get_field_id('feedburner_id'); ?>"><?php _e('Enter your Feedburner ID:', "mm"); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('feedburner_id'); ?>" name="<?php echo $this->get_field_name('feedburner_id'); ?>" type="text" value="<?php echo $feedburner_id; ?>" /></p>
    <p><label for="<?php echo $this->get_field_id('twitter_id'); ?>"><?php _e('Enter your Twitter ID:', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('twitter_id'); ?>" name="<?php echo $this->get_field_name('twitter_id'); ?>" value="<?php echo $twitter_id; ?>" /></p>
    <p><label for="<?php echo $this->get_field_id('facebook_id'); ?>"><?php _e('Enter your Facebook URL:', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('facebook_id'); ?>" value="<?php echo $facebook_id; ?>" /></p>
    <p><label for="<?php echo $this->get_field_id('googleplus_id'); ?>"><?php _e('Enter your Google+ ID:', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('googleplus_id'); ?>" value="<?php echo $googleplus_id; ?>" /></p>
    <center><strong><u>Other Settings</u></strong></center><br /> 
    <p><label for="<?php echo $this->get_field_id('fbheight_id'); ?>"><?php _e('Facebook height(px):', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('fbheight_id'); ?>" value="<?php echo $fbheight_id; ?>" /></p>
    <p><label for="<?php echo $this->get_field_id('recommend_id'); ?>"><?php _e('Google recommend text:', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('recommend_id'); ?>" value="<?php echo $recommend_id; ?>" /></p>
 
    <p><label for="<?php echo $this->get_field_id('emailtext_id'); ?>"><?php _e('Subscription box text:', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('emailtext_id'); ?>" value="<?php echo $emailtext_id; ?>" /></p>
    <center><strong><u>Background Color Settings</u></strong><br />[Get color code list  <a href="http://html-color-codes.info/" rel="nofollow" title="Get color code list here" target="_blank"><strong>HERE</strong></a>]</center><br />
    <p><label for="<?php echo $this->get_field_id('fbboxcolor_id'); ?>"><?php _e('Facebook: Default: #ECEEF5', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('fbboxcolor_id'); ?>" value="<?php echo $fbboxcolor_id; ?>" /></p>
    <p><label for="<?php echo $this->get_field_id('gpluscolor_id'); ?>"><?php _e('Google: Default: #fff', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('gpluscolor_id'); ?>" value="<?php echo $gpluscolor_id; ?>" /></p>
    <p><label for="<?php echo $this->get_field_id('twitcolor_id'); ?>"><?php _e('Twitter: Default: #DBECF4', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('twitcolor_id'); ?>" value="<?php echo $twitcolor_id; ?>" /></p>
    <p><label for="<?php echo $this->get_field_id('emailcolor_id'); ?>"><?php _e('Subscription: Default: #fdead2', "mm"); ?></label>
    <input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('emailcolor_id'); ?>" value="<?php echo $emailcolor_id; ?>" /></p>
    <?php }
}
add_action('widgets_init', create_function('', 'return register_widget(\'magazine3_multiplesocialwidget\');'));
class magazine3_social_widget_Widget extends WP_Widget {
  function magazine3_social_widget_Widget() {
    $widget_ops = array( 'classname' => 'social_widget', 'description' => __( 'A social networking icons widget.', 'mm') );
    $this->WP_Widget( 'socialwidget', __( 'M3: Social Icon Widget', 'mm' ), $widget_ops );
  }
  function widget( $args, $instance ) {
    extract( $args );
    $title = apply_filters('widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base);
    $twitter_url = $instance['twitter_url'];
    $twitter = isset($instance['twitter']) ? $instance['twitter'] : false;
    $facebook_url = $instance['facebook_url'];
    $facebook = isset($instance['facebook']) ? $instance['facebook'] : false;
    $in_url = $instance['in_url'];
    $in = isset($instance['in']) ? $instance['in'] : false;
    $gplus_url = $instance['gplus_url'];
    $gplus = isset($instance['gplus']) ? $instance['gplus'] : false;
    $pint_url = $instance['pint_url']; 
    $pint = isset($instance['pint']) ? $instance['pint'] : false;
    $forrst_url = $instance['forrst_url']; 
    $forrst = isset($instance['forrst']) ? $instance['forrst'] : false;
    $flickr_url = $instance['flickr_url'];
    $flickr = isset($instance['flickr']) ? $instance['flickr'] : false;
    $deviant_url = $instance['deviant_url'];
    $deviant = isset($instance['deviant']) ? $instance['deviant'] : false;
    $behance_url = $instance['behance_url'];
    $behance = isset($instance['behance']) ? $instance['behance'] : false;
    $vimeo_url = $instance['vimeo_url']; 
    $vimeo = isset($instance['vimeo']) ? $instance['vimeo'] : false;
    $utube_url = $instance['utube_url'];
    $utube = isset($instance['utube']) ? $instance['utube'] : false;
    $rss = isset($instance['rss']) ? $instance['rss'] : false;
    $rss_url = home_url('rss2_url');
    echo $before_widget;
    if ( $title )
      echo $before_title . $title . $after_title;

    /* Start output */
    $output = '';   ?>
        <ul class="socialwidget">
    <?php
    if ( $twitter )
      $output .= '<li><a href="'.$twitter_url.'" class="twitter" title="Twitter" ></a>';
    if ( $facebook )
      $output .= '<li><a href="'.$facebook_url.'" class="facebook" title="Facebook" ></a>';
    if ( $in )
      $output .= '<li><a href="'.$in_url.'" class="in" title="LinkedIn" ></a>';
    if ( $gplus )
      $output .= '<li><a href="'.$gplus_url.'" class="gplus" title="Google Plus" ></a>';
    if ( $pint )
      $output .= '<li><a href="'.$pint_url.'" class="pint" title="Pinterest" ></a>';
    if ( $forrst )
      $output .= '<li><a href="'.$forrst_url.'" class="forrst" title="Forrst" ></a>';
    if ( $flickr )
      $output .= '<li><a href="'.$flickr_url.'" class="flickr" title="Flickr" ></a>';
    if ( $deviant )
      $output .= '<li><a href="'.$deviant_url.'" class="deviant" title="DeviantArt" ></a>';
    if ( $behance )
      $output .= '<li><a href="'.$behance_url.'" class="behance" title="Behance" ></a>';
    if ( $vimeo )
      $output .= '<li><a href="'.$vimeo_url.'" class="vimeo" title="Vimeo" ></a>';
    if ( $utube )
      $output .= '<li><a href="'.$utube_url.'" class="utube" title="YouTube" ></a>';
    if ( $rss )
      $output .= '<li><a href="'.$rss_url.'" class="rss" title="RSS" ></a>';
    echo ( $output.'</ul>' );
    echo $after_widget;
  }


  /* Update the widget settings. */
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    $instance['icon_size'] = $new_instance['icon_size'];
    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['twitter_url'] = strip_tags( $new_instance['twitter_url'] );
    $instance['twitter'] = isset($new_instance['twitter']) ? true : false;
    $instance['facebook_url'] = strip_tags( $new_instance['facebook_url'] );
    $instance['facebook'] = isset($new_instance['facebook']) ? true : false;
    $instance['in_url'] = strip_tags( $new_instance['in_url'] );
    $instance['in'] = isset($new_instance['in']) ? true : false;
    $instance['gplus_url'] = strip_tags( $new_instance['gplus_url'] );
    $instance['gplus'] = isset($new_instance['gplus']) ? true : false;
    $instance['pint_url'] = strip_tags( $new_instance['pint_url'] );
    $instance['pint'] = isset($new_instance['pint']) ? true : false;
    $instance['forrst_url'] = strip_tags( $new_instance['forrst_url'] );
    $instance['forrst'] = isset($new_instance['forrst']) ? true : false;
    $instance['flickr_url'] = strip_tags( $new_instance['flickr_url'] );
    $instance['flickr'] = isset($new_instance['flickr']) ? true : false;
    $instance['deviant_url'] = strip_tags( $new_instance['deviant_url'] );
    $instance['deviant'] = isset($new_instance['deviant']) ? true : false;
    $instance['behance_url'] = strip_tags( $new_instance['behance_url'] );
    $instance['behance'] = isset($new_instance['behance']) ? true : false;
    $instance['vimeo_url'] = strip_tags( $new_instance['vimeo_url'] );
    $instance['vimeo'] = isset($new_instance['vimeo']) ? true : false;
    $instance['utube_url'] = strip_tags( $new_instance['utube_url'] );
    $instance['utube'] = isset($new_instance['utube']) ? true : false;
    $instance['rss'] = isset($new_instance['rss']) ? true : false;

    return $instance;
  }


  function form( $instance ) {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'twitter' => false, 'twitter_url' => '', 'facebook' => false, 'facebook_url' => '', 'in' => false, 'in_url' => '', 'gplus' => false, 'gplus_url' => '', 'pint' => false, 'pint_url' => '', 'forrst' => false, 'forrst_url' => '', 'flickr' => false, 'flickr_url' => '', 'deviant' => false, 'deviant_url' => '', 'behance' => false, 'behance_url' => '', 'vimeo' => false, 'vimeo_url' => '', 'utube' => false, 'utube_url' => '', 'rss' => false ) );
    $title = esc_attr( $instance['title'] );
    $twitter_url = esc_attr( $instance['twitter_url'] );
    $facebook_url = esc_attr( $instance['facebook_url'] );
    $in_url = esc_attr( $instance['in_url'] );
    $gplus_url = esc_attr( $instance['gplus_url'] );
    $pint_url = esc_attr( $instance['pint_url'] );
    $forrst_url = esc_attr( $instance['forrst_url'] );
    $flickr_url = esc_attr( $instance['flickr_url'] );
    $deviant_url = esc_attr( $instance['deviant_url'] );
    $behance_url = esc_attr( $instance['behance_url'] );
    $vimeo_url = esc_attr( $instance['vimeo_url'] );  
    $utube_url = esc_attr( $instance['utube_url'] );
    ?>

        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title:', 'mm' ); ?></label> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e( 'Twitter', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['twitter'], true) ?> id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" /><br />
            <input type="text" value="<?php echo $twitter_url; ?>" name="<?php echo $this->get_field_name('twitter_url'); ?>" id="<?php echo $this->get_field_id('twitter_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Twitter profile', 'mm' ); ?>
            </small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e( 'Facebook', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['facebook'], true) ?> id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" /><br />
            <input type="text" value="<?php echo $facebook_url; ?>" name="<?php echo $this->get_field_name('facebook_url'); ?>" id="<?php echo $this->get_field_id('facebook_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Facebook profile', 'mm' ); ?>
            </small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('in'); ?>"><?php _e( 'LinkedIn', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['in'], true) ?> id="<?php echo $this->get_field_id('in'); ?>" name="<?php echo $this->get_field_name('in'); ?>" /><br />
            <input type="text" value="<?php echo $in_url; ?>" name="<?php echo $this->get_field_name('in_url'); ?>" id="<?php echo $this->get_field_id('in_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to LinkedIn Profile', 'mm' ); ?></small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('gplus'); ?>"><?php _e( 'Google+', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['gplus'], true) ?> id="<?php echo $this->get_field_id('gplus'); ?>" name="<?php echo $this->get_field_name('gplus'); ?>" /><br />
            <input type="text" value="<?php echo $gplus_url; ?>" name="<?php echo $this->get_field_name('gplus_url'); ?>" id="<?php echo $this->get_field_id('gplus_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Google+ Profile', 'mm' ); ?></small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('pint'); ?>"><?php _e( 'Pinterest', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['pint'], true) ?> id="<?php echo $this->get_field_id('pint'); ?>" name="<?php echo $this->get_field_name('pint'); ?>" /><br />
            <input type="text" value="<?php echo $pint_url; ?>" name="<?php echo $this->get_field_name('pint_url'); ?>" id="<?php echo $this->get_field_id('pint_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Pinterest', 'mm' ); ?>
            </small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('forrst'); ?>"><?php _e( 'Forrst', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['forrst'], true) ?> id="<?php echo $this->get_field_id('forrst'); ?>" name="<?php echo $this->get_field_name('forrst'); ?>" /><br />
            <input type="text" value="<?php echo $forrst_url; ?>" name="<?php echo $this->get_field_name('forrst_url'); ?>" id="<?php echo $this->get_field_id('forrst_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Forrst Profile', 'mm' ); ?>
            </small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e( 'Flickr', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['flickr'], true) ?> id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" /><br />
            <input type="text" value="<?php echo $flickr_url; ?>" name="<?php echo $this->get_field_name('flickr_url'); ?>" id="<?php echo $this->get_field_id('flickr_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Flickr Photostream', 'mm' ); ?>
            </small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('deviant'); ?>"><?php _e( 'DeviantArt', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['deviant'], true) ?> id="<?php echo $this->get_field_id('deviant'); ?>" name="<?php echo $this->get_field_name('deviant'); ?>" /><br />
            <input type="text" value="<?php echo $deviant_url; ?>" name="<?php echo $this->get_field_name('deviant_url'); ?>" id="<?php echo $this->get_field_id('deviant_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to DeviantArt Profile', 'mm' ); ?>
            </small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('behance'); ?>"><?php _e( 'Behance', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['behance'], true) ?> id="<?php echo $this->get_field_id('behance'); ?>" name="<?php echo $this->get_field_name('behance'); ?>" /><br />
            <input type="text" value="<?php echo $behance_url; ?>" name="<?php echo $this->get_field_name('behance_url'); ?>" id="<?php echo $this->get_field_id('behance_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Behance', 'mm' ); ?>
            </small>
        </p>
         
        <p>
            <label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e( 'Vimeo', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['vimeo'], true) ?> id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" /><br />
            <input type="text" value="<?php echo $vimeo_url; ?>" name="<?php echo $this->get_field_name('vimeo_url'); ?>" id="<?php echo $this->get_field_id('vimeo_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to Vimeo Profile', 'mm' ); ?>
            </small>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('utube'); ?>"><?php _e( 'YouTube', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['utube'], true) ?> id="<?php echo $this->get_field_id('utube'); ?>" name="<?php echo $this->get_field_name('utube'); ?>" /><br />
            <input type="text" value="<?php echo $utube_url; ?>" name="<?php echo $this->get_field_name('utube_url'); ?>" id="<?php echo $this->get_field_id('utube_url'); ?>" class="widefat" />
            <br />
            <small><?php _e( 'URL to YouTube Profile', 'mm' ); ?>
            </small>
        </p>
        <p>     <label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e( 'RSS', 'mm' ); ?></label>
            <input class="checkbox" type="checkbox" <?php checked($instance['rss'], true) ?> id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" />
        </p>
  <?php
  }
}  
add_action('widgets_init', 'register_magazine3_social_widget_Widget');
function register_magazine3_social_widget_Widget() {
    register_widget('magazine3_social_widget_Widget');
}

// Post views code
// function to display number of posts.

function magazine3($postID){

    $count_key = 'post_views_count';

    $count = get_post_meta($postID, $count_key, true);

    if($count==''){

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

        return __('0 View','mm');

    }

    return $count. __(' ','mm'); 

}

function magazine3_short_title($before = '', $after = '', $echo = true, $length = false) {

$title = get_the_title();



if ( $length && is_numeric($length) ) {

$title = substr( $title, 0, $length );

}



if ( strlen($title)> 0 ) {

$title = apply_filters('magazine3_short_title', $before . $title . $after, $before, $after);

if ( $echo )

echo $title;

else

return $title;

}

}

// function to display number of posts.
function magazine3_getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return __('0 View','mm');
    }
    return $count. __(' ','mm'); 
}

// function to count views.
function magazine3_setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
 
function magazine3_string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
    array_pop($words);
  }
  return implode(' ', $words);
} 


// About Us widget 
class magazine3_about_me_widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  public function __construct() {
    parent::__construct(
      'magazine3_about_me_widget', // Base ID
      'M3: About Me', // Name
      array( 'description' => __( 'Widget to display an introduction about you', 'text_domain' ), ) // Args
    );
  }

  /**
   * Front-end display of widget.
   *
   * @see WP_Widget::widget()
   *
   * @param array $args     Widget arguments.
   * @param array $instance Saved values from database.
   */
        public function widget( $args, $instance ) {
            extract( $args );
            $title = empty($instance['title']) ? 'M3: About Us ' : apply_filters('widget_title', $instance['title']);
            $name = empty($instance['name']) ? '' : apply_filters('widget_name', $instance['name']);
            $email = empty($instance['email']) ? '' : apply_filters('widget_email', $instance['email']);
            $about_me = empty($instance['about_me']) ? '' : apply_filters('widget_about_me', $instance['about_me']);
            
            echo $before_widget;
            if ( ! empty( $title ) )
      echo $before_title . $title . $after_title; ?>
            
            <!-- front display here -->
            <div class="about-widget-wrapper">
                <div class="about-widget-left"><?php echo get_avatar( $email, 65 ); ?></div>
                <div class="about-widget-name"><?php echo $name; ?></div>
                <div class="about-widget-content"><?php echo $about_me; ?></div>
            </div>
            
             <?php echo $after_widget;
        }
        /**
   * Sanitize widget form values as they are saved.
   *
   * @see WP_Widget::update()
   *
   * @param array $new_instance Values just sent to be saved.
   * @param array $old_instance Previously saved values from database.
   *
   * @return array Updated safe values to be saved.
   */
        public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
                
                $instance['title'] = strip_tags( $new_instance['title'] );
                $instance['name'] = strip_tags( $new_instance['name'] );
                $instance['email'] = strip_tags( $new_instance['email'] );
                $instance['about_me'] = strip_tags( $new_instance['about_me'] ); // remove strip_tags to allow HTML tags
                $instance['facebook'] = strip_tags( $new_instance['facebook'] );
                $instance['twitter'] = strip_tags( $new_instance['twitter'] );
                $instance['linkedin'] = strip_tags( $new_instance['linkedin'] );
                $instance['google'] = strip_tags( $new_instance['google'] );
                $instance['flickr'] = strip_tags( $new_instance['flickr'] );
                $instance['youtube'] = strip_tags( $new_instance['youtube'] );
                $instance['feedburner'] = strip_tags( $new_instance['feedburner'] );
                $instance['skype'] = strip_tags( $new_instance['skype'] );
                $instance['lastfm'] = strip_tags( $new_instance['lastfm'] );
                $instance['digg'] = strip_tags( $new_instance['digg'] );
               
                return $instance;
        }
        /**
   * Back-end widget form.
   *
   * @see WP_Widget::form()
   *
   * @param array $instance Previously saved values from database.
   */
        public function form( $instance ) {
    //print_r($instance);
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'About me', 'text_domain' );
    } 
                if ( isset( $instance[ 'name' ] ) ) {
      $name = $instance[ 'name' ];
    }
    else {
      $name = __( '', 'text_domain' );
    }
                if ( isset( $instance[ 'email' ] ) ) {
      $email = $instance[ 'email' ];
    }
    else {
      $email = __( '', 'text_domain' );
    }
                if ( isset( $instance[ 'about_me' ] ) ) {
      $about_me = $instance[ 'about_me' ];
    }
   
                ?>
        
                <p> 
                    <?php echo get_avatar( $email, 50 ); ?><br/>
                    <label for="<?php echo $this->get_field_id( 'name' ); ?>"><?php _e( 'Name:' ); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name ); ?>" />
    </p>
                <p>
                    <label for="<?php echo $this->get_field_id( 'about_me' ); ?>"><?php _e( 'About Me:' ); ?></label> 
                    <textarea class="widefat" id="<?php echo $this->get_field_id( 'about_me' ); ?>" name="<?php echo $this->get_field_name( 'about_me' ); ?>"><?php echo esc_attr( $about_me ); ?></textarea>
    </p>
                <p>
                    <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email (to get your avatar from gravatar.com):' ); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
    </p>
            
                        <h3>Widget Settings</h3>
            
                <p>
                    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
                    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
                
                   
                
<?php        }
        
} // class magazine3_about_me_widget ends

// register magazine3_about_me_widget widget
add_action( 'widgets_init', create_function( '', 'register_widget( "magazine3_about_me_widget" );' ) );

/* hook updater to init */
add_action( 'init', 'mag3widgets_updater_init' );

/**
 * Load and Activate Plugin Updater Class.
 * @since 0.1.0
 */
function mag3widgets_updater_init() {

    /* Load Plugin Updater */
    require_once( trailingslashit( plugin_dir_path( __FILE__ ) ) . '/plugin-updater.php' );

    /* Updater Config */
    $config = array(
        'base'         => plugin_basename( __FILE__ ), //required
        'repo_uri'     => 'http://magazine3.com/updates/',
        'repo_slug'    => 'm3-widgets',
    );

    /* Load Updater Class */
    new m3widgets_Plugin_Updater( $config );
}
?>