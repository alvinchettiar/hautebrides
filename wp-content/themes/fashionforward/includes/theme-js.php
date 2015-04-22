<?php
// Css file
function m3_enqueue_style() {
	wp_enqueue_style( 'm3_core', get_template_directory_uri() . '/style.css', false ); 
}
add_action( 'wp_enqueue_scripts', 'm3_enqueue_style' );
function m3_js( ) {
wp_enqueue_script('jquery');

// Load Scripts only on HomePage   
   wp_enqueue_script( 'perfectscrollbar', get_bloginfo('template_directory').'/js/perfect-scrollbar.min.js',  array('jquery'), '1.0', true);

    wp_enqueue_script( 'stickyMojo', get_bloginfo('template_directory').'/js/stickyMojo.js',  array('jquery'), '1.0', true);
// Register Load more script  

    wp_enqueue_script('wpex-ajax-load', get_template_directory_uri() . '/js/scroll/ajax-load.js', array('jquery'), 1.0, true);

//localize ajax

    wp_localize_script( 'wpex-ajax-load', 'wpexvars', array('ajaxurl' => admin_url( 'admin-ajax.php' )));
 

wp_enqueue_script( 'js', get_bloginfo('template_directory').'/js/js.js', array( 'jquery' ),  '1.0', true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );

		} 
 	}
add_action( 'wp_enqueue_scripts', 'm3_js' );
// Customizer js file
function m3_customizer_live_preview() { 
wp_enqueue_script( 'm3-theme-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'jquery', 'customize-preview' ),	'1.0.0', true );

}
add_action( 'customize_preview_init', 'm3_customizer_live_preview' ); 
    // Google fonts
    wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,600,600italic,700italic,400italic|Lora|Playfair+Display:400,700|Varela+Round');
    wp_enqueue_style( 'googleFonts');
?>