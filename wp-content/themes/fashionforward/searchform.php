<div class="search_form">
    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
      <input type="search" placeholder="Enter Search Here" class="search_input" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">
      <input type="submit" value="" class="searchbutton">
    </form>
</div>