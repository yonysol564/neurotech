<?php 	

//--------------------------  E V E N T   P O S T   -----------------------------

	function slider_post_type() {

		$labels = array(
			'name'                  => __( 'Sliders', 'neurotech' ),
			'singular_name'         => __( 'Slider', 'neurotech' ),
			'menu_name'             => __( 'Sliders', 'neurotech' ),
			'name_admin_bar'        => __( 'Post Type', 'neurotech' ),
			'parent_item_colon'     => __( 'Parent Item:', 'neurotech' ),
			'all_items'             => __( 'All Sliders', 'neurotech' ),
			'add_new_item'          => __( 'New Slider', 'neurotech' ),
			'add_new'               => __( 'New Slider', 'neurotech' ),
			'new_item'              => __( 'New Item', 'neurotech' ),
			'edit_item'             => __( 'Edit Item', 'neurotech' ),
			'update_item'           => __( 'Update Item', 'neurotech' ),
			'view_item'             => __( 'View Item', 'neurotech' ),
			'search_items'          => __( 'Search Item', 'neurotech' ),
			'not_found'             => __( 'Not found', 'neurotech' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'neurotech' ),
			'items_list'            => __( 'Items list', 'neurotech' ),
			'items_list_navigation' => __( 'Items list navigation', 'neurotech' ),
			'filter_items_list'     => __( 'Filter items list', 'neurotech' ),
		);
		$args = array(
			'label'                 => __( 'Slider', 'neurotech' ),
			'description'           => __( 'Post Type Description', 'neurotech' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail','page-attributes'),
			'taxonomies'            => array(''),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'slider', $args );

	}
	add_action( 'init', 'slider_post_type', 0 );






?>
