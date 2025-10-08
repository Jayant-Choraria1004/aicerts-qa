<?php
// Register Custom Post Type
function custom_customer_testimonial_type() {

	$labels = array(
		'name'                  => 'Testimonials',
		'singular_name'         => 'Testimonial',
		'menu_name'             => 'Testimonials',
		'name_admin_bar'        => 'Testimonial',
		'archives'              => 'Testomonial Archives',
		'attributes'            => 'Testomonial Attributes',
		'parent_item_colon'     => 'Parent Testomonial:',
		'all_items'             => 'All Testomonials',
		'add_new_item'          => 'Add New Testomonial',
		'add_new'               => 'Add New',
		'new_item'              => 'New Testomonial',
		'edit_item'             => 'Edit Testomonial',
		'update_item'           => 'Update Testomonial',
		'view_item'             => 'View Testomonial',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Testimonial',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
		'taxonomies'            => array( 'testimonial-category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'customer-testimonial', $args );

}
add_action( 'init', 'custom_customer_testimonial_type', 0 );



// Register Custom Taxonomy
function create_testimonial_taxonomy() {

	$labels = array(
		'name'                       => 'Testimonial Categories',
		'singular_name'              => 'Testimonial Category',
		'menu_name'                  => 'Testimonial Categories',
		'all_items'                  => 'All Testimonial Categories',
		'parent_item'                => 'Parent Testimonial Category',
		'parent_item_colon'          => 'Parent Testimonial Category:',
		'new_item_name'              => 'New Testimonial Category Name',
		'add_new_item'               => 'Add New Testimonial Category',
		'edit_item'                  => 'Edit Testimonial Category',
		'update_item'                => 'Update Testimonial Category',
		'view_item'                  => 'View Testimonial Category',
		'separate_items_with_commas' => 'Separate items with commas',
		'add_or_remove_items'        => 'Add or remove items',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Testimonial Categories',
		'search_items'               => 'Search Testimonial Categories',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No items',
		'items_list'                 => 'Testimonial Categories list',
		'items_list_navigation'      => 'Testimonial Categories list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'testimonial-category', array( 'customer-testimonial' ), $args );

}
add_action( 'init', 'create_testimonial_taxonomy', 0 );

