<?php 

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Locations",
		"singular_name" => "Location",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "location", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 50,"menu_icon" => "dashicons-store",		
		"supports" => array( "title", "revisions" ),		
	);
	register_post_type( "location", $args );

	$labels = array(
		"name" => "Staff",
		"singular_name" => "Staff Member",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "staff", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-businessman",		
		"supports" => array( "title", "revisions", "thumbnail" ),		
	);
	register_post_type( "staff", $args );

	$labels = array(
		"name" => "Events",
		"singular_name" => "Event",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "event", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-tickets-alt",		
		"supports" => array( "title", "revisions", "thumbnail" ),		
		"taxonomies" => array( "category", "post_tag" )
	);
	register_post_type( "event", $args );

	$labels = array(
		"name" => "Menu Items",
		"singular_name" => "Menu Item",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "fd_menu_item", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 24,"menu_icon" => "dashicons-carrot",		
		"supports" => array( "title", "thumbnail" ),		
	);
	register_post_type( "fd_menu_item", $args );

// End of cptui_register_my_cpts()
}

?>