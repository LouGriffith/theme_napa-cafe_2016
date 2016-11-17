<?php the_content(); ?>
<div class="event-list">
	<ul>
	<?php

		$post_type = 'event';

		$args = array( 'post_type' => $post_type );
		$loop = new WP_Query( $args );
		
		while ( $loop->have_posts() ) : $loop->the_post(); ?>
		  	
		  	<li class="event">
		  		<?php if ( has_post_thumbnail() ) : ?>
				    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-thumb">
				        <?php the_post_thumbnail('post-img'); ?>
				    </a>
				<?php endif; ?>
			  	<h2>
			  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			  			<?php the_title(); ?>
			  		</a>
			  	</h2>

			  	<div class="event-date">
			  		<span class="">When </span>
			  		<span class="date"><?php the_field('date'); ?></span>
			  	</div>
			  	
			  	<div class="event-desc">
			  		<p><?php the_field('event_description'); ?></p>

			  		<?php if(get_field('special_guest_name')) { ?>
			  			<h4 class="special-guest">Special Guest <?php the_field('special_guest_name'); ?> of <?php the_field('special_guest_company'); ?></h4>
					<? } ?>
			  	</div>

			  	<button class="btn btn-primary" href="<?php the_field('ticket_url'); ?>">Buy Tickets</button>
			  	<button class="btn btn-default" href="<?php the_field('ticket_url'); ?>">Learn More</button>
		  	</li>
		<?php endwhile;

	    wp_reset_postdata();
	?>
	</ul>
</div>
