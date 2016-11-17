<?php
/**
 * Template Name: Event List Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  	<div class="left-side">
		<?php get_template_part('templates/page', 'header'); ?>
  	</div>
  	<div class="right-side">
  		<?php get_template_part('templates/content', 'events'); ?>
  	</div>
<?php endwhile; ?>
