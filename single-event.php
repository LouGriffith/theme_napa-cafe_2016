<?php while (have_posts()) : the_post(); ?>
	<header>
	  	<?php get_template_part('templates/page', 'event-header'); ?>
	</header>
  	
  	<div class="wrap container">
  		<?php get_template_part('templates/content-event', get_post_type()); ?>
  	</div>
<?php endwhile; ?>
