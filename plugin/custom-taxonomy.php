<?php
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_book_taxonomies', 0 );

// create two taxonomies, locations and writers for the post type "book"
function create_book_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'package-types', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'package-type', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search package-types', 'textdomain' ),
		'all_items'         => __( 'All package-types', 'textdomain' ),
		'parent_item'       => __( 'Parent package-type', 'textdomain' ),
		'parent_item_colon' => __( 'Parent package-type:', 'textdomain' ),
		'edit_item'         => __( 'Edit package-type', 'textdomain' ),
		'update_item'       => __( 'Update package-type', 'textdomain' ),
		'add_new_item'      => __( 'Add New package-type', 'textdomain' ),
		'new_item_name'     => __( 'New package-type Name', 'textdomain' ),
		'menu_name'         => __( 'Package Type', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'package-type' ),
	);

	register_taxonomy( 'package-type', array( 'package'), $args );

}
?>