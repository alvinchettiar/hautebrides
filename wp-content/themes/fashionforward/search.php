<?php get_header(); ?>



   <div class="main">

      <div class="content-single">


<div class="breadcrumb archive-breadcrumb"><div class="breadcrumb-left"> <span class="statictext"><?php _e('You are here: ','mm'); ?> </span> <?php m3_seo_breadcrumbs(); ?></div>
 
<div class="cb"></div>
</div>


 

  

  

  <div class="postcontainer">

  <?php if ( is_author() ) { ?>



<?php $otherFeaturedPost = new WP_Query();$otherFeaturedPost->query('showposts=1'); ?> 

  <?php while ($otherFeaturedPost->have_posts()) : $otherFeaturedPost->the_post(); ?>  

     <?php endwhile; wp_reset_query(); ?> 

  <?php if(isset($_GET['author_name'])) $current_author = get_userdatabylogin($author_name); else $current_author = get_userdata(intval($author)); ?>

 



         <div class="clear-block">

          <div class="alignleft">

        <?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '100' ); }?>

          </div>



  <div class="author-info">

          <b><?php echo $current_author->display_name; ?></b>

             <p style=" margin-top: 5px !important; margin-bottom: 5px !important;">     <?php  if($current_author->user_description<>'') echo $current_author->user_description;

             else _e("This user hasn't shared any profile information", "mm"); ?>  

          </p>

<ul>         <?php  if(($current_author->user_url<>'http://') && ($current_author->user_url != ''))

            echo '<li class="authorstuff">'.__('Home page:', mm).' <a href="'.$current_author->user_url.'">'.$current_author->user_url.'</a></li>';

          if($current_author->yim != '')

            echo '<li class="authorstuff">Yahoo Messenger: <a href="ymsgr:sendIM?'.$current_author->yim.'">'.$current_author->yim.'</a></li>';

          if($current_author->jabber != '')

            echo '<li class="authorstuff">Jabber/GTalk: <a href="gtalk:chat?jid='.$current_author->jabber.'">'.$current_author->jabber.'</a></li>';

          if($current_author->aim != '')

            echo '<li class="authorstuff">AIM: <a href="aim:goIM?screenname='.$current_author->aim.'">'.$current_author->aim.'</a></li>';   ?>

</ul>  </div>        

      </div>

<div class="cb"></div>

<?php } ?>

     <?php if(have_posts()) : ?>

    <?php get_template_part( 'posts' ); ?>

   

    

  <?php endif; ?> 

  

  

</div>

</div>

  

 <?php get_sidebar(); ?>

  <div class="cb"> </div>

 </div> 



<?php get_footer(); ?>