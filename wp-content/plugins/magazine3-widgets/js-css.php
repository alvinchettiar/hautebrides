<?php function about_the_author_important()
{
    // Register the script like this for a plugin:
	wp_register_script( 'm3scriptsjs', plugins_url( '/script.js', __FILE__ ) );
 
	// For either a plugin or a theme, you can then enqueue the script:
   wp_enqueue_script( 'jquery' );
   wp_enqueue_script( 'm3scriptsjs' );
 
}
add_action( 'wp_enqueue_scripts', 'about_the_author_important', 5 );

/**
 * Register with hook 'wp_enqueue_scripts', which can be used for front end CSS and JavaScript
 */
add_action( 'wp_enqueue_scripts', 'prefix_add_my_stylesheet' );

/**
 * Enqueue plugin style-file
 */ 
function prefix_add_my_stylesheet() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'prefix-style', plugins_url('w.css', __FILE__) );
   // if (is_single()) { 
     	wp_enqueue_style( 'prefix-style' );  
 	//}
}


?>