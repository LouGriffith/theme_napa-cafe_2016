<div id="events" class="widget">
	
	<div class="event-wrapper">
		<h3>Your Invited</h3>
		<?php 
			$args = array( 'post_type' => 'event', 'posts_per_page' => 4 );
			$loop = new WP_Query( $args ); ?>

			<ul class="event-list">
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			  
				<li class="event">
					<h4>
				  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				  			<?php the_title(); ?>
				  		</a>
				  	</h4>

				  	<div class="event-date">
				  		<span class="">When </span>
				  		<span class="date"><?php the_field('date'); ?></span>
				  	</div>
				</li>

			<?php endwhile; ?>

			</ul>
	</div>

</div>


