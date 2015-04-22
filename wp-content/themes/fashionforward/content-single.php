      <div class="recommended_title"><?php _e('RELATED NEWS ','mm'); ?></div>

      <div class="recommended_wrapper">

      <?php $categories = get_the_category($post->ID);

		if ($categories) { $category_ids = array();

		foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

		$args=array(

		'category__in' => $category_ids,

		'post__not_in' => array($post->ID), 

		'showposts'=> get_theme_mod( 'related_number') ,

		'ignore_sticky_posts'=>1,

		'posts_per_page' => 4,

		);

		$my_query = new WP_Query($args);		if( $my_query->have_posts() ) {

		while ($my_query->have_posts()) : $my_query->the_post(); 

	?>

        <div class="recommended_inner">

          <div class="recomended_thumb"> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('secondpostimg'); ?> </div>

          <div class="recomended_txt"> <a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>

        </div>

        <?php endwhile; } wp_reset_query(); } ?>

      </div> 

	  