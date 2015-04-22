<?php

get_header(); ?>

<div class="main">
	
<div class="page404">		
<h1><?php _e("*404* - Not Found", "mm"); ?></h1>
<h3><?php _e("Sorry, we can't find the content you're looking for at this URL. Please navigate from the navigation menu on top or try searching below..", "mm"); ?></h3>
 <?php get_search_form( ); ?>
 
</div>		
</div>

<?php get_footer(); ?>