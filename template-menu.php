<?php
/**
 * Template Name: Food Menu Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  	<header>
		<?php get_template_part('templates/page', 'header'); ?>
  	</header>

  	<div class="wrap container">
  		<?php get_template_part('templates/content', 'fd-menu'); ?>
  	</div>
<?php endwhile; ?>
