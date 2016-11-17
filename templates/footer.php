

<footer class="footer-bs">
    <div class="footer-top">

        <?php $post_type = 'location';

            $args = array( 'post_type' => $post_type );
            $loop = new WP_Query( $args );
            
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

        	<div class="col-md-4 footer-brand animated fadeInLeft">
            	<h2>Napa Cafe</h2>
                <?php the_field('location_brief_description'); ?>    
            </div>

            <div class="col-md-2 footer-info">
                <div class="footer-hours">
                    <h4>Contact</h4>
                    <address>
                        <span class="location-address"><?php the_field('location_street_address'); ?></span>
                        <span class="location-city"><?php the_field('location_city'); ?></span>
                        <span class="location-state"><?php the_field('location_state'); ?></span>
                        <span class="location-zip"><?php the_field('location_zip'); ?></span>
                    </address>

                    <a href="tel:<?php the_field('location_phone_#'); ?>">
                        <?php the_field('location_phone_#'); ?>    
                    </a>
                </div>
            </div>
        	
        	<div class="col-md-3 footer-info">
            	<div class="footer-hours">
                    <h4>Opening Hours</h4>
                    <?php

                        // check if the repeater field has rows of data
                        if( have_rows('location_hours') ): ?>
                            <ul clasa="opening-hours">
                            <?php // loop through the rows of data
                            while ( have_rows('location_hours') ) : the_row(); ?>
                            <li class="opening-hour"> 
                                <?php // display a sub field value ?>
                                <?php the_sub_field('location_day'); ?> -
                                <?php the_sub_field('location_opens'); ?> -
                                <?php the_sub_field('location_closes'); ?>
                            </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php else :

                            // no rows found

                        endif;

                    ?>
                </div>
            </div>
            
        	<div class="col-md-3 footer-ns">        
                <div class="footer-newsletter">
            		<h4>Get Our Newsletter</h4>
    	            <div class="input-group">
    	              <input type="text" class="form-control" placeholder="Search for...">
    	              <span class="input-group-btn">
    	                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
    	              </span>
    	            </div>
    	        </div>

                <div class="footer-social">
    	            <h4>Follow Us</h4>
    	            <ul class="social-network social-circle">
    	                <li><a href="<?php the_field('facebook'); ?>" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    	                <li><a href="<?php the_field('twitter'); ?>" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
    	        	</ul>
                </div>

                <?php dynamic_sidebar('sidebar-footer'); ?>

            </div>

        <?php endwhile;
          wp_reset_postdata();
        ?>
    </div>

    <div class="footer-bottom">
    	<div class="col-md-6 footer-copy">
			<p>Copyright 2016. Napa Cafe<p>
    	</div>

     	<div class="col-md-6 footer-by">
			<p>Handcrafted by <a href="http://www.lougriffith.com">Lou</a></p>
    	</div>   	
    </div>
</footer>