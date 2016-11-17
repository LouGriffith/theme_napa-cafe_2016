<?php

if(get_field('fd_menu_content_top'))
{ ?>
	<div class='fd_menu_content_top'>
		<?php the_field('fd_menu_content_top'); ?>
	</div>
<?php } 

?>

<div class="fd-menu">

<?php
//for a given post type, return all
$post_type = 'fd_menu_item';
$tax = 'fd_menu_section';
$menu_type = get_field('fd_menu_type');
$parent_terms = get_terms($tax, array( 'parent' => 0, 'orderby' => 'slug', 'hide_empty' => false ) );   

foreach ( $parent_terms as $pterm ) {

    $custom_terms = get_terms( 
    	$tax, 
    		array( 
    			'parent' => $pterm->term_id, 
    			'orderby' => 'slug', 
    			'hide_empty' => false,
    		) 
    	);

	foreach($custom_terms as $custom_term) {
	    wp_reset_query();
	    $args = array('post_type' => $post_type,
	        'tax_query' => array(
	            array(
	                'taxonomy' => $tax,
	                'field' => 'slug',
	                'terms' => $custom_term->slug,
	            ),
	        ),
	        'fd_menu_pages'=> $menu_type->slug,
	     );

	     $loop = new WP_Query($args);
	     if($loop->have_posts()) { ?>

	        <header class="menu-section" style="background-image: url();">
	    		<h2 class="fd-menu-section"><?php echo $custom_term->name; ?></h2>
	    	</header>

	        <?php while($loop->have_posts()) : $loop->the_post(); ?>
	            
	        	<div class="fd-menu-item">
		  			<h3><?php the_title(); ?></h3>

		  			<div class="menu-price">
		  				<?php if( have_rows('food_price') ): ?>
						    <ul>
							    <?php while( have_rows('food_price') ): the_row(); ?>
							        <li class="price-list">
										<?php if(get_sub_field("portion")): ?>
							        		<span class="portion"><?php the_sub_field('portion'); ?></span>
										<?php endif; ?>
							        	<span class="price"><?php the_sub_field('price'); ?></span>
							        </li>
							    <?php endwhile; ?>
						    </ul>
						<?php endif; ?>

						<?php if( have_rows('drink_price') ): ?>
						    <ul>
							    <?php while( have_rows('drink_price') ): the_row(); ?>
							        <li>
										<?php if(get_sub_field("portion")): ?>
							        		<span class="portion"><?php the_sub_field('portion'); ?></span>
										<?php endif; ?>						        	
										<span class="price"><?php the_sub_field('price'); ?></span>
							        </li>
							    <?php endwhile; ?>
						    </ul>
						<?php endif; ?>
		  			</div>

		  			<div class="menu-desc">
		  				<?php the_field('food_desciption'); ?>
		  				<?php the_field('drink_desciption'); ?>
		  			</div>
		  		</div>

	        <? endwhile;
	     } 
	}

}	

?>

</div>

<?php

if(get_field('fd_menu_content_bottom'))
{ ?>
	<div class='fd_menu_content_bottom'>
		<?php the_field('fd_menu_content_bottom'); ?>
	</div>
<?php } 

?>