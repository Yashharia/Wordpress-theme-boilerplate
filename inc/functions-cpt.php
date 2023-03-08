<?php 
$album_labels = array(
	'name'                => _x('Album', 'Post Type General Name'),
	'singular_name'       => _x('Album', 'Post Type Singular Name'),
	'menu_name'           => __('Album'),
	'parent_item_colon'   => __('Parent Album'),
	'all_items'           => __('All Album'),
	'view_item'           => __('View Album'),
	'add_new_item'        => __('Add New Album'),
	'add_new'             => __('Add New'),
	'edit_item'           => __('Edit Album'),
	'update_item'         => __('Update Album'),
	'search_items'        => __('Search Album'),

);

$album_args = array(
	'label'               => __('Album'),
	'description'         => __('Album'),
	'labels'              => $album_labels,
	'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields'),
	'hierarchical'        => false,
	'public'              => false,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_icon'           => "dashicons-images-alt",
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'can_export'          => true,
	'has_archive'         => false,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'show_in_rest'        => true,
	'rewrite'             => array(
		'slug' => 'album',
		'with_front' => false
	),
);

register_post_type('album', $album_args);
