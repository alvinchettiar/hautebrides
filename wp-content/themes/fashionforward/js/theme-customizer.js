(function( $ ) {
	"use strict";
	// Background
		wp.customize( 'bg_color_setting', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).css( 'background-color', to );
		} );
		} );
	
	
	// Global Skin color	
		wp.customize( 'global_color', function( value ) {
		value.bind( function( to ) {
			$( '#submit, #load-more a, #load-more a:hover' ).css( 'background-color', to );
			$( '.site-title a, .main-menu ul li a:hover, .main-menu ul li a:active, .breadcrumb a, .meta_author a, .logged-in-as a, .recommended_title, .social-area span, .comment-metadata a' ).css( 'color', to );
			 
		} );
		} ); 
	// Post title color	
		wp.customize( 'post_title_color', function( value ) {
		value.bind( function( to ) {			
			$( '.singlepage-title h1' ).css( 'color', to );
		} );
		} ); 
	// Content Color	
		wp.customize( 'content_color', function( value ) {
		value.bind( function( to ) {			
			$( '.cotent-text, #singlecontent p, .posttextcontent p, .postcontent p, .zc a, #thearchivelist a').css( 'color', to );
		} );
		} ); 
	// Heading Color	
		wp.customize( 'test_color', function( value ) {
		value.bind( function( to ) {			
			$( '.cotent-text h1, .cotent-text h2, .cotent-text h3, .cotent-text h4, .cotent-text h5, .cotent-text h6' ).css( 'color', to );
		} );
		} );  
	// Sidebar Title Color	
		wp.customize( 'sidebar_heading_color', function( value ) {
		value.bind( function( to ) {			
			$( '.sidebar-widget-title span' ).css( 'color', to );
		} );
		} );  
 
  // Block 1  Font Color 
wp.customize( 'b1_font_color', function( value ) {
		value.bind( function( to ) {			
			$( '.featured-title' ).css( 'color', to );
		} );
		} ); 
 // Block 2 Font Color 
wp.customize( 'b2_font_color', function( value ) {
		value.bind( function( to ) {			
			$( '.fsection2-cat-title a' ).css( 'color', to );
		} );
		} ); 
  // Block 3 Font Color 
wp.customize( 'b3_font_color', function( value ) {
		value.bind( function( to ) {			
			$( '.fsection3-cat-title a' ).css( 'color', to );
		} );
		} ); 

  // Block 4 Font Color 
wp.customize( 'b4_font_color', function( value ) {
		value.bind( function( to ) {			
			$( '.section4-cat-title a' ).css( 'color', to );
		} );
		} ); 

// Block 5 Font Color
wp.customize( 'b5_font_color', function( value ) {
		value.bind( function( to ) {			
			$( '.section5-cat-title a' ).css( 'color', to );
		} );
		} ); 
// Block 6  Font Color
wp.customize( 'b6_font_color', function( value ) {
		value.bind( function( to ) {			
			$( '.section6-cat-title a' ).css( 'color', to );
		} );
		} ); 

})( jQuery );
