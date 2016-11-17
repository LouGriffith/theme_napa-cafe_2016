<div class="<?php post_class('article-layout center-block'); ?>">
  	<header>
  		<?php get_template_part('templates/page', 'header'); ?>
  	</header>
  	
  	<div class="wrap container">
		<?php get_template_part('templates/content-single', get_post_type()); ?>
  	</div>
</div>