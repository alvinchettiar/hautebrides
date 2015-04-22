      <!--primary-sidebar-->
      <aside>
        <div class="primary-sidebar">
          <div class="widget-wrapper">
           <?php dynamic_sidebar('default-sidebar'); ?>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
<?php endif; ?>
    </div>
        </div>
      </aside>