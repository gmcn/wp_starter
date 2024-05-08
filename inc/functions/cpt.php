<?php

// Register Custom Post Type
// function projects_post_type() {
//
// 	$labels = array(
// 		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
// 		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
// 		'menu_name'             => __( 'Projects', 'text_domain' ),
// 		'name_admin_bar'        => __( 'Project', 'text_domain' ),
// 		'archives'              => __( 'Item Archives', 'text_domain' ),
// 		'attributes'            => __( 'Item Attributes', 'text_domain' ),
// 		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
// 		'all_items'             => __( 'All Items', 'text_domain' ),
// 		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
// 		'add_new'               => __( 'Add New', 'text_domain' ),
// 		'new_item'              => __( 'New Item', 'text_domain' ),
// 		'edit_item'             => __( 'Edit Item', 'text_domain' ),
// 		'update_item'           => __( 'Update Item', 'text_domain' ),
// 		'view_item'             => __( 'View Item', 'text_domain' ),
// 		'view_items'            => __( 'View Items', 'text_domain' ),
// 		'search_items'          => __( 'Search Item', 'text_domain' ),
// 		'not_found'             => __( 'Not found', 'text_domain' ),
// 		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
// 		'featured_image'        => __( 'Featured Image', 'text_domain' ),
// 		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
// 		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
// 		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
// 		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
// 		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
// 		'items_list'            => __( 'Items list', 'text_domain' ),
// 		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
// 		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
// 	);
// 	$args = array(
// 		'label'                 => __( 'Project', 'text_domain' ),
// 		'description'           => __( 'Projects information page.', 'text_domain' ),
// 		'labels'                => $labels,
// 		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions', 'featured' ),
// 		'taxonomies'            => array( 'category' ),
// 		'hierarchical'          => false,
// 		'public'                => true,
// 		'show_ui'               => true,
// 		'show_in_menu'          => true,
// 		'menu_position'         => 5,
// 		'menu_icon'             => 'dashicons-clipboard',
// 		'show_in_admin_bar'     => true,
// 		'show_in_nav_menus'     => true,
// 		'can_export'            => true,
// 		'has_archive'           => true,
// 		'exclude_from_search'   => false,
// 		'publicly_queryable'    => true,
// 		'capability_type'       => 'page',
// 	);
// 	register_post_type( 'projects', $args );
//
// }
// add_action( 'init', 'projects_post_type', 0 );
//
// add_action( 'init', 'projects_taxonomies', 0 );
//
// function projects_taxonomies() {
//
//     // Product Type Taxonomy
//     $product_cat_labels = array(
//         'name'          => 'Project Category',
//         'singular_name' => 'Project Category',
//         'menu_name'     => 'Project Categories'
//     );
//
//     $product_cat_args = array(
//         'labels'                     => $product_cat_labels,
//         'hierarchical'               => true,
//         'public'                     => true,
//         'show_ui'                    => true,
//         'show_admin_column'          => true,
//         'show_in_nav_menus'          => true,
//         'show_tagcloud'              => true,
//         'rewrite'                    => array('pages' => true)
//     );
//     register_taxonomy( 'projects_category', array( 'projects' ), $product_cat_args );
//
// 		// Product Type Taxonomy
//     $product_type_labels = array(
//         'name'          => 'Project Type',
//         'singular_name' => 'Project Type',
//         'menu_name'     => 'Project Types'
//     );
//
//     $product_type_args = array(
//         'labels'                     => $product_type_labels,
//         'hierarchical'               => true,
//         'public'                     => true,
//         'show_ui'                    => true,
//         'show_admin_column'          => true,
//         'show_in_nav_menus'          => true,
//         'show_tagcloud'              => true,
//         'rewrite'                    => array('pages' => true)
//     );
//     register_taxonomy( 'projects_type', array( 'projects' ), $product_type_args );
//
// }
