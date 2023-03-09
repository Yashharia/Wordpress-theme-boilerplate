<?php 
$students_labels = array(
	'name'                => _x('Students', 'Post Type General Name'),
	'singular_name'       => _x('Students', 'Post Type Singular Name'),
	'menu_name'           => __('Students'),
	'parent_item_colon'   => __('Parent students'),
	'all_items'           => __('All students'),
	'view_item'           => __('View students'),
	'add_new_item'        => __('Add New students'),
	'add_new'             => __('Add New'),
	'edit_item'           => __('Edit students'),
	'update_item'         => __('Update students'),
	'search_items'        => __('Search students'),

);

$students_args = array(
	'label'               => __('Students'),
	'description'         => __('Students'),
	'labels'              => $students_labels,
	'supports'            => array('title', 'thumbnail', 'revisions', 'custom-fields'),
	'hierarchical'        => false,
	'public'              => false,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_icon'           => "dashicons-groups",
	'show_in_nav_menus'   => true,
	'show_in_admin_bar'   => true,
	'can_export'          => true,
	'has_archive'         => false,
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	'show_in_rest'        => true,
	'rewrite'             => array(
		'slug' => 'students',
		'with_front' => false
	),
);

register_post_type('students', $students_args);



$tags = array(
	'name' => 'Specalism/Tags',
	'singular' => 'Specalism/Tags',
	'menu_name' => 'Specalism/Tags'
);

$tags_args = array(
	'labels' => $tags,
	'hierarchical' => true,
	'public' => true,
	'show_ui' => true,
	'show_admin_column' => true,
	'show_in_nav_menus' => true,
	'show_tagcloud' => true,
	'show_in_rest'      => true,
);

register_taxonomy('tags', 'students', $tags_args);
