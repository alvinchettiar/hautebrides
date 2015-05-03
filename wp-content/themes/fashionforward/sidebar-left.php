      <!--primary-sidebar-->
      <aside>
        <div class="primary-sidebar-left">
          <div class="widget-wrapper">
           <?php dynamic_sidebar('left-sidebar'); ?>
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
<?php endif; ?>
    </div>
        </div>
      </aside>