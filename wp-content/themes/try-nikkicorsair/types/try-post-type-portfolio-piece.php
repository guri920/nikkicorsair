<?php

/**
 * Post Type Declaration
 */
$labels = array(
	'name' => 'Portfolio Piece',
	'singular_name' => 'Portfolio Piece',
	'add_new' => 'Add New',
	'add_new_item' => 'Add New Portfolio Piece',
	'edit_item' => 'Edit Portfolio Piece',
	'new_item' => 'New Portfolio Piece',
	'view_item' => 'View Portfolio Piece',
	'search_items' => 'Search Portfolio Pieces',
	'not_found' => 'No Portfolio Pieces Found',
	'not_found_in_trash' => 'No Portfolio Pieces Found in Trash',
	'menu_name' => 'Portfolio'
);

$args = array(
	'labels' => $labels,
	'description' => '',
	'public' => true,
	'exclude_from_search' => false,
	'publicly_queryable' => true,
	'show_ui' => true,
	'show_in_nav_menus' => false,
	'show_in_menu' => true,
	'show_in_admin_bar' => true,
	'menu_position' => 10,
	'menu_icon' => 'dashicons-format-image', // http://melchoyce.github.io/dashicons/
	'capability_type' => 'post',
	'hierarchical' => true,
	'supports' => array( 'title', 'editor' ),
	'taxonomies' => array(),
	'has_archive' => false
);

register_post_type( 'portfolio-piece', $args );