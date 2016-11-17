<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

<header>

  <div class="header-bar">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <i class="icon-napa-sm-logo"></i>
      <span><?php bloginfo('name'); ?></span>
    </a>

    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
      <div class="button">
        <span class="hamb"></span>
        <span class="hamb"></span>
        <span class="hamb"></span>      
        <span class="hamb"></span>
        <span class="hamb"></span>
        <span class="hamb"></span>
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
      </div>
    </button>
  </div>

  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <div class="sidebar-brand">
      <a class="brand" href="<?= esc_url(home_url('/')); ?>">
        <i class="icon-napa-logo"></i>
        <span><?php bloginfo('name'); ?></span>
      </a>
    </div>

    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav sidebar-nav']);
      endif;
    ?>
    </nav>
</header>


