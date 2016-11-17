<?php
/* SLIDER CUSTOM FIELD FOR HOMEPAGE */
	$images = get_field('homepage_slideshow');
	$count=0;
	$count1=0;

	if($images) : ?>

<div id="slider">
	<div id="homepage-slideshow" class="carousel slide" data-ride="carousel">

	  	<!-- Wrapper for slides -->
	  	<div class="carousel-inner" role="listbox">
	  		<?php foreach( $images as $image ): ?>
	      		<div class="item<?php if($count1==0) : echo ' active'; endif; ?>">
					<div class="slider-overlay"></div>
	                <img src="<?php echo $image['sizes']['home-slider']; ?>" alt="<?php echo $image['alt']; ?>" />                
	            </div><!-- item -->
	           	<?php $count1++; ?>
			<?php endforeach; ?> 
	   	</div> <!-- carousel inner -->

	  	<!-- Controls -->
	  	<a class="left carousel-control" href="#homepage-slideshow" role="button" data-slide="prev">
	    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>

	  	<a class="right carousel-control" href="#homepage-slideshow" role="button" data-slide="next">
	    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>


	</div>
</div>

<?php endif; ?>

