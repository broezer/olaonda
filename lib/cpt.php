<?

// Register Custom Post Type
function spotguide() {

	$labels = array(
		'name'                  => _x( 'Surf Spots', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Surf Spot', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Surf Spots', 'text_domain' ),
		'name_admin_bar'        => __( 'Surf Spot', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Surf Spots', 'text_domain' ),
		'add_new_item'          => __( 'Add New Surf Spot', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Surf Spot', 'text_domain' ),
		'edit_item'             => __( 'Edit Surf Spot', 'text_domain' ),
		'update_item'           => __( 'Update Surf Spot', 'text_domain' ),
		'view_item'             => __( 'View Surf Spot', 'text_domain' ),
		'view_items'            => __( 'View Surf Spots', 'text_domain' ),
		'search_items'          => __( 'Search Surf Spot', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Surf Spots list', 'text_domain' ),
		'items_list_navigation' => __( 'Surf Spots list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Surf Spots list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Surf Spot', 'text_domain' ),
		'description'           => __( 'Surfspot', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => '/surf/ericeira-surf-spot-guide/',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'surf_spot', $args );

}
add_action( 'init', 'spotguide', 0 );

?>
