<?php /* Template Name: Archive Page */ get_header(); ?>

    
    <div class="main">
    
        <article class="content-singl-archive">
         <div class="archive-main">    
            <div id="thearchivelist">
                <ul>
                    <h4><?php _e("Pages", "mm"); ?>:</h4>
                    <?php wp_list_pages('title_li='); ?>
                </ul>
                <br />
                <ul>
                    <h4><?php _e("By Month", "mm"); ?>:</h4>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
                <br />
                <ul>
                    <h4><?php _e("By Category", "mm"); ?>:</h4>
                <?php wp_list_categories('sort_column=name&title_li='); ?>
                </ul>
                <br />
            </div>
            <div class="zc">
                <h4 style="font-weight:bold;margin: 8px 0 9px 0 !important;font-size: 17px !important;border-bottom: 1px solid #ddd;padding: 0 0px 0 0 !important;"><?php _e("Browse Last 45 Articles:", "mm"); ?></h4>
                <ul>
                    <?php wp_get_archives('type=postbypost&limit=45'); ?>
                </ul>
            </div>
            <div class="cb"></div>
            </div>      
        </article>
    <?php get_sidebar(); ?> 
  <div class="cb"></div>    
  </div>


<?php get_footer(); ?>
 