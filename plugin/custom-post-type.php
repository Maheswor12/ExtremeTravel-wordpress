<?php 

// post type of featured package
add_action( 'init', 'featured_package' );
function featured_package() {
	$labels = array(
		'name'               => _x( 'packages', 'post type general name', 'travel' ),
		'singular_name'      => _x( 'package', 'post type singular name', 'travel' ),
		'menu_name'          => _x( 'Packages', 'admin menu', 'travel' ),
		'name_admin_bar'     => _x( 'package', 'add new on admin bar', 'travel' ),
		'add_new'            => _x( 'Add New', 'package', 'travel' ),
		'add_new_item'       => __( 'Add New package', 'travel' ),
		'new_item'           => __( 'New package', 'travel' ),
		'edit_item'          => __( 'Edit package', 'travel' ),
		'view_item'          => __( 'View package', 'travel' ),
		'all_items'          => __( 'All packages', 'travel' ),
		'search_items'       => __( 'Search packages', 'travel' ),
		'parent_item_colon'  => __( 'Parent packages:', 'travel' ),
		'not_found'          => __( 'No packages found.', 'travel' ),
		'not_found_in_trash' => __( 'No packages found in Trash.', 'travel' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'travel' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-welcome-widgets-menus',
		'rewrite'            => array( 'slug' => 'package' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'package', $args );
}

// for testimonial
add_action( 'init', 'testimonial' );
function testimonial() {
	$labels = array(
		'name'               => _x( 'testimonials', 'post type general name', 'travel' ),
		'singular_name'      => _x( 'testimonial', 'post type singular name', 'travel' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'travel' ),
		'name_admin_bar'     => _x( 'testimonial', 'add new on admin bar', 'travel' ),
		'add_new'            => _x( 'Add New', 'testimonial', 'travel' ),
		'add_new_item'       => __( 'Add New testimonial', 'travel' ),
		'new_item'           => __( 'New testimonial', 'travel' ),
		'edit_item'          => __( 'Edit testimonial', 'travel' ),
		'view_item'          => __( 'View testimonial', 'travel' ),
		'all_items'          => __( 'All testimonials', 'travel' ),
		'search_items'       => __( 'Search testimonials', 'travel' ),
		'parent_item_colon'  => __( 'Parent testimonials:', 'travel' ),
		'not_found'          => __( 'No testimonials found.', 'travel' ),
		'not_found_in_trash' => __( 'No testimonials found in Trash.', 'travel' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'travel' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'menu_icon'=>'dashicons-media-text',
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'testimonial', $args );
}

?>