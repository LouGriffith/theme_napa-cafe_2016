<?php while (have_posts()) : the_post(); ?>
  	<?php get_template_part('templates/content', 'home-slider'); ?>
  	<?php get_template_part('templates/content', 'home-actions'); ?>

<?php endwhile; ?>