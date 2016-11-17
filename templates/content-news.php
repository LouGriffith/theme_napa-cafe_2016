<div class="news-list">
	<ul>
		<?php if (!have_posts()) : ?>
		  <div class="alert alert-warning">
		    <?php _e('Sorry, no results were found.', 'sage'); ?>
		  </div>
		  <?php get_search_form(); ?>
		<?php endif; ?>

		<?php while (have_posts()) : the_post(); ?>
		    <li><?php get_template_part('templates/content', 'post'); ?></li>
		<?php endwhile; ?>
	</ul>
</div>
