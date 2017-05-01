<?php

function wpsmu_setup(){
  require_once('lib/admin.php');
  require_once('lib/login.php');
  require_once('lib/acf.php');
  require_once('lib/tgmpa.php');

  //Add Featured Image Support
  add_theme_support( 'post-thumbnails' );

  add_image_size( 'myfullsize', 4000, 3000, true );
  add_image_size( 'hd', 1919, 1079, true );
}

add_action( 'after_setup_theme', 'wpsmu_setup' );



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
