<?php use Roots\Sage\Titles; ?>

<?php
	if (is_home()) {
    	$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
	} else {
	    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	}
?>

<div class="page-header" style="background-image: url('<?php echo $thumb['0'];?>')">
	<h1><?= Titles\title(); ?></h1>
	<div class="header-overlay"></div>
</div>