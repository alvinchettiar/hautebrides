<?php
function m3_customizer_css() {
?>
	<style type="text/css">
		/* Body color changing option */
		body  { background: <?php echo get_theme_mod( 'bg_color_setting' ); ?>; } 
		
		/* Global Color Scheme */
		 
		.site-title a, 
		.main-menu ul li a:hover, 
		.main-menu ul li a:active,
		.breadcrumb a,
		.meta_author a,
		.logged-in-as a,
		.recommended_title, 
		.social-area span,
		.comment-metadata a{ color: <?php echo get_theme_mod( 'global_color' ); ?>; }

		#load-more a,
		#load-more a:hover,
		#submit { background-color: <?php echo get_theme_mod( 'global_color' ); ?>; }

		/* Post Title Color */
		.singlepage-title h1  { color: <?php echo get_theme_mod( 'post_title_color' ); ?>; }

		/* Content Color */
		.cotent-text, .posttextcontent p, #content p, body, .zc a, #thearchivelist a { color: <?php echo get_theme_mod( 'content_color' ); ?>; }
		/*Block #3*/
.featured-category-title a{ color: <?php echo get_theme_mod( 'b1_font_color' ); ?>; }
.small-cat-title a{ color: <?php echo get_theme_mod( 'b2_font_color' ); ?>; }
.section-two-cat-title a{ color: <?php echo get_theme_mod( 'b3_font_color' ); ?>; }
.section1-category a{ color: <?php echo get_theme_mod( 'b5_font_color' ); ?>; }
.section2-category a{ color: <?php echo get_theme_mod( 'b6_font_color' ); ?>; }
.section3-category a{ color: <?php echo get_theme_mod( 'b7_font_color' ); ?>; }
.section4-category a{ color: <?php echo get_theme_mod( 'b8_font_color' ); ?>; }
		/* Heading Color */
		{ color: <?php echo get_theme_mod( 'heading_color' ); ?>; }

/* H1 to h6*/
		 .cotent-text h1, .cotent-text h2, .cotent-text h3, .cotent-text h4, .cotent-text h5, .cotent-text h6  { color: <?php echo get_theme_mod( 'test_color' ); ?>; }

		/* Sidebar Title Color */
		.sidebar-widget-title span{ color: <?php echo get_theme_mod( 'sidebar_heading_color' ); ?>; }
		
	/* Section#1 color */
	
	.featured-title {color: <?php echo get_theme_mod( 'b1_font_color' ); ?>; }


/* Section#2 color */

	.fsection2-cat-title a {color: <?php echo get_theme_mod( 'b2_font_color' ); ?>; }

/* Section#3 color */
	
	.fsection3-cat-title a {color: <?php echo get_theme_mod( 'b3_font_color' ); ?>; }

/* Section#4 color */
	.section4-cat-title a {color: <?php echo get_theme_mod( 'b4_font_color' ); ?>; }

/* Section#5 color */
	
	.section5-cat-title a {color: <?php echo get_theme_mod( 'b5_font_color' ); ?>; }

/* Section#6 color */
	
	.section6-cat-title a {color: <?php echo get_theme_mod( 'b6_font_color' ); ?>; }


	</style>
<?php
} // end m3_customizer_css
add_action( 'wp_head', 'm3_customizer_css' );

