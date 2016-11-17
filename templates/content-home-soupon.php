<?php while (have_posts()) : the_post(); ?>
	<div id="soupon" style="background-image: url(<?php the_field('soupon_background_image'); ?>);">
		
		<div class="soupon-wrapper">
			<h3><?php the_field('soupon_title'); ?></h3>
			<h2><?php the_field('soupon_text'); ?></h2>

			<a class="btn btn-default" href="<?php the_field('soupon_link'); ?>"><?php the_field('soupon_button_text'); ?></a>

	    </div>
		<div class="soupon-overlay"></div>
	</div>
<?php endwhile; ?>


