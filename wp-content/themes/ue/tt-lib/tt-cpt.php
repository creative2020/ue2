<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
Requirements: php5.5.*
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 2020 CPT's

add_action( 'init', 'tt_cpt' );

function tt_cpt() {
    
    $cpt_singlular_name = 'Project';
    $cpt_plural_name = 'Projects';
    
    
	$labels = array(
		'name'               => _x( $cpt_plural_name, 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( $cpt_singlular_name, 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( $cpt_plural_name, 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( $cpt_singlular_name, 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', $cpt_singlular_name, 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New '.$cpt_singlular_nameBook, 'your-plugin-textdomain' ),
		'new_item'           => __( 'New '.$cpt_singlular_name, 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit '.$cpt_singlular_name, 'your-plugin-textdomain' ),
		'view_item'          => __( 'View '.$cpt_singlular_name, 'your-plugin-textdomain' ),
		'all_items'          => __( 'All '.$cpt_plural_name, 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search '.$cpt_plural_name, 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent '.$cpt_plural_name.':', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No '.$cpt_plural_name.' found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No '.$cpt_plural_name.' found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'project' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
	);

	register_post_type( 'project', $args );
}
    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*CPT*/
add_action( 'init', 'tt_cpt_people' );
function tt_cpt_people() {
    $tt_cpt_name = 'people';
    $tt_cpt_name_plural = 'people';
    
    
	$labels = array(
		'name'               => _x( $tt_cpt_name, 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( $tt_cpt_name, 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( $tt_cpt_name_plural, 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( $tt_cpt_name_plural, 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', $tt_cpt_name, 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'new_item'           => __( 'New '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'view_item'          => __( 'View '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'all_items'          => __( 'All '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search '.$tt_cpt_name_plural, 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent '.$tt_cpt_name_plural.':', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No '.$tt_cpt_name_plural.' found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No '.$tt_cpt_name_plural.' found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => $tt_cpt_name ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
	);

	register_post_type( 'people', $args );
}

//Register Taxonomy
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'tt_people_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function tt_people_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
    $label_name = 'people';
    $label_name_plural = 'people';
    
	$labels = array(
		'name'              => _x( $label_name, 'taxonomy general name' ),
		'singular_name'     => _x( $label_name, 'taxonomy singular name' ),
		'search_items'      => __( 'Search '.$label_name ),
		'all_items'         => __( 'All '.$label_name_plural ),
		'parent_item'       => __( 'Parent '.$label_name ),
		'parent_item_colon' => __( 'Parent '.$label_name.':' ),
		'edit_item'         => __( 'Edit '.$label_name ),
		'update_item'       => __( 'Update '.$label_name ),
		'add_new_item'      => __( 'Add New '.$label_name ),
		'new_item_name'     => __( 'New '.$label_name ),
		'menu_name'         => __( $label_name ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => $label_name ),
	);

	//register_taxonomy( $label_name, array( $label_name ), $args );

}
////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*CPT*/
add_action( 'init', 'tt_cpt_estimate' );
function tt_cpt_estimate() {
    $tt_cpt_name = 'estimate';
    $tt_cpt_name_plural = 'estimates';
    
    
	$labels = array(
		'name'               => _x( $tt_cpt_name, 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( $tt_cpt_name, 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( $tt_cpt_name_plural, 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( $tt_cpt_name_plural, 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', $tt_cpt_name, 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'new_item'           => __( 'New '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'view_item'          => __( 'View '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'all_items'          => __( 'All '.$tt_cpt_name, 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search '.$tt_cpt_name_plural, 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent '.$tt_cpt_name_plural.':', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No '.$tt_cpt_name_plural.' found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No '.$tt_cpt_name_plural.' found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => $tt_cpt_name ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'custom-fields' )
	);

	register_post_type( 'estimate', $args );
}

//Register Taxonomy
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'tt_estimate_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function tt_estimate_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
    $label_name = 'estimate';
    $label_name_plural = 'estimates';
    
	$labels = array(
		'name'              => _x( $label_name, 'taxonomy general name' ),
		'singular_name'     => _x( $label_name, 'taxonomy singular name' ),
		'search_items'      => __( 'Search '.$label_name ),
		'all_items'         => __( 'All '.$label_name_plural ),
		'parent_item'       => __( 'Parent '.$label_name ),
		'parent_item_colon' => __( 'Parent '.$label_name.':' ),
		'edit_item'         => __( 'Edit '.$label_name ),
		'update_item'       => __( 'Update '.$label_name ),
		'add_new_item'      => __( 'Add New '.$label_name ),
		'new_item_name'     => __( 'New '.$label_name ),
		'menu_name'         => __( $label_name ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => $label_name ),
	);

	//register_taxonomy( $label_name, array( $label_name ), $args );

}
////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Roles

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Client role

function tt_role_client () {
    
    $capabilities = array(
        'manage_options' => true,
        
    );

add_role( 'tt_client', 'Client', $capabilities );
    
}
//add_action( 'init', 'tt_role_client', 0 ); // not working ??
tt_role_client (); 

////////////////////////////////////////////////////////

































    