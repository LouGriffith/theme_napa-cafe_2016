<article <?php post_class(); ?>>

	<div class="event-content wrap container">
		
		<div class="event-details">
			<span class="event-desc"><?php the_field('event_description'); ?></span>

			<?php if(get_field('event_courses')) { ?>

				<div class="event-schedule">
					<header>
						<h2>Event Schedule</h2>
					</header>
					
					<?php if(get_field('event_courses')): ?>
						<ul class="course-list">
					    <?php while(the_repeater_field('event_courses')): ?>
					    	<li class="course">
					    		<h4 class="course-name"><?php the_sub_field('course_name'); ?></h4>
					    		<span class="course-details"><?php the_sub_field('course_details'); ?></span>
					    	</li>
					    <?php endwhile; ?>
					    </ul>
					<?php endif; ?>

				</div>

			<? } ?>
		</div>

		<?php if(get_field('special_guest_name')) { ?>

			<div class="event-guest">
				<header>
					<h3>Special Guest</h3>
				</header>
				<div class="guest-profile">
		        	<div class="profile-card">
						
						<?php if(get_field('special_guest_photo')) { ?>
				        	<div class="profile-pic">
				        		<?php $image = wp_get_attachment_image_src(get_field('special_guest_photo'), 'medium'); ?>
								<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('special_guest_photo')) ?>" />
				        	</div>
						<? } ?>

					  	<div class="profile-info">
					  		<h4 class="guest-name"><?php the_field('special_guest_name'); ?></h4>
					  		<span class="guest-company"><span class="of">of </span><?php the_field('special_guest_company'); ?></span>

					  		<span class="guest-bio">
					  			<?php the_field('special_guest_bio'); ?>
					  		</span>

					  		<a class="btn btn-default" href="<?php the_field('special_guest_website'); ?>">Learn more about <?php the_field('special_guest_name'); ?></a>
					  	</div>


				  	</div>
			  	</div>
			</div>

		<? } ?>

	</div>
</article>
