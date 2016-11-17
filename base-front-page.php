<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
      <div class="overlay hidden"></div>
      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      <?php
        do_action('get_header');
        get_template_part('templates/header');
      ?>

      <main class="main">
        <?php get_template_part('templates/content', 'home-slider'); ?>

    <?php $post_type = 'location';

        $args = array( 'post_type' => $post_type );
        $loop = new WP_Query( $args );
        
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
        

        <div class="contact-info">
          <div class="container">
            <div class="row">
              <div class="col-sm-4 col-xs-6">
                  <div class="overflow-hidden">
                      <h4>Location</h4>
                      <p class="lead">
                        <?php the_field('location_street_address'); ?>
                      </p>
                  </div>
              </div>

              <div class="col-sm-4 col-xs-6">
                  <div class="overflow-hidden">
                      <h4>Phone</h4>
                      <p class="lead">
                        <a href="tel:<?php the_field('location_phone_#'); ?>">
                            <?php the_field('location_phone_#'); ?>    
                        </a>
                      </p>
                  </div>
              </div>

              <div class="col-sm-4 col-xs-12 text-right">
                  <div class="overflow-hidden float-right ">
                      <a href="http://www.opentable.com/napa-afe" class="btn btn-primary btn-lg col-sm-6 col-sm-offset-6 col-xs-12">Reserve a table</a>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <?php endwhile;
          wp_reset_postdata();
        ?>

        <div class="container welcome">
          <div class="col-md-7">
            <h1><?php the_field('homepage_title'); ?></h1>
            <p><?php the_field('homepage_text'); ?></p>
          </div>

          <div class="col-md-5">
            <?php get_template_part('templates/content', 'home-soupon'); ?>
          </div>
        </div>

        <div class="parallax-background" style="background-image: url(<?php the_field('homepage_full_width_image_1'); ?>);"><?php wp_reset_postdata(); ?>

        </div>

        <div class="events-home">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <?php get_template_part('templates/content', 'home-featured'); ?>
              </div> 

              <div class="col-md-6">
                <?php get_template_part('templates/content', 'home-events'); ?>
              </div> 
            </div>
          </div>
        </div>

      </main><!-- /.main -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
