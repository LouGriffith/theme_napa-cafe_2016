<?php 

add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes() {

	$labels = array(
		"name" => "Menu Sections",
		"label" => "Menu Sections",
		);

	$args = array(
		"labels" => $labels,
		"hierarchical" => true,
		"label" => "Menu Sections",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'fd_menu_section', 'with_front' => true ),
		"show_admin_column" => true,
	);
	register_taxonomy( "fd_menu_section", array( "fd_menu_item" ), $args );

// End cptui_register_my_taxes
}

?>