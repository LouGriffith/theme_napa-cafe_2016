<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body>

    <div class="overlay hidden"></div>

    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <!-- Start #main -->
    <div id="main" class="m-scene">
    <div>

    <!-- Start body_class -->
    <div <?php body_class(''); ?>>

      <div id="wrapper">
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
        
        <div class="" role="document">
          <div class="content row">
            <main>
              <?php include Wrapper\template_path(); ?>
            </main><!-- /.main -->
          </div><!-- /.content -->
        </div><!-- /.wrap -->

        <?php
          do_action('get_footer');
          get_template_part('templates/footer');
        ?>

      </div>

    </div>
     <!-- End body_class -->
    
    </div>
    <!-- End #main -->
    
    <?php wp_footer(); ?>
        
  </body>
</html>
