<?php while (have_posts()) : the_post(); ?>
	<div id="featured" style="background-image: url(<?php the_field('feature_background_image'); ?>);">
		<div class="feature-wrapper">
			<h2><?php the_field('feature_title'); ?></h2>
			<span class="featured-desc">
				<?php the_field('feature_text'); ?>
			</span>

			<a class="btn btn-default" href="<?php the_field('feature_link'); ?>">Featured</a>
	    </div>
		<div class="feature-overlay"></div>
	</div>
<?php endwhile; ?>


