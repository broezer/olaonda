<?php

function wpsmu_setup(){
  require_once('lib/admin.php');
  require_once('lib/login.php');
  require_once('lib/acf.php');
  require_once('lib/tgmpa.php');
	require_once('lib/cpt.php');

  //Add Featured Image Support
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'myfullsize', 4000, 3000, true );
  add_image_size( 'hd', 1919, 1079, true );
  add_image_size( 'slider-thumb', 320, 216, array( 'center', 'top' ) );


}

add_action( 'after_setup_theme', 'wpsmu_setup' );


//https://support.advancedcustomfields.com/forums/topic/removing-paragraph-tags-from-wysiwyg-fields/
function the_field_without_wpautop( $field_name ) {

	remove_filter('acf_the_content', 'wpautop');
	add_filter('acf_the_content', 'nl2br');
	the_field( $field_name );

	add_filter('acf_the_content', 'wpautop');


}

function get_field_without_wpautop($field_name) {

	// Temporarily remove the filter for this get_sub_field call
	remove_filter('acf_the_content', 'wpautop');
	add_filter('acf_the_content', 'nl2br');
	// Get the sub field without the wpautop filter
	$field = get_field($field_name);

	// Re-establish the wpautop filter for everything
	add_filter('acf_the_content', 'wpautop');

	// Return our non-wpautop'd field
	return $field;
}


function get_sub_field_without_wpautop($field_name) {

	// Temporarily remove the filter for this get_sub_field call
	remove_filter('acf_the_content', 'wpautop');
	add_filter('acf_the_content', 'nl2br');
	// Get the sub field without the wpautop filter
	$field = get_sub_field($field_name);

	// Re-establish the wpautop filter for everything
	add_filter('acf_the_content', 'wpautop');

	// Return our non-wpautop'd field
	return $field;
}


//Add Google Maps Api key


function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyAe7KpDXYpw3HSegMtdnzc7ec58zkjK6b0';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );






?>
