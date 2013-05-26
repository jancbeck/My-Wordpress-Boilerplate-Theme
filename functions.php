<?php

/** Hooks ****************************************************************/

add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts_and_styles' );
add_action( 'wp_default_scripts', 'enqueue_built_in_jquery_in_footer' );

add_action( 'init', 'setup_theme_init' );

////////////////
// Debugging  //
////////////////

if (function_exists('c'))
	c( $wp_query );

/** Functions ************************************************************/


function enqueue_theme_scripts_and_styles() {

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'app', get_template_directory_uri(). '/scripts/app.js', array('jquery'), false, true ); 

	wp_enqueue_style( 'print', get_template_directory_uri(). '/css/print.css', false, false , 'print' );
	wp_enqueue_style( 'style', get_template_directory_uri(). '/css/screen.css', false, false , 'screen' );
}

function setup_theme_init() {

	register_nav_menus( array( 
		'main-nav' => __( 'Navigation' )
	));

	add_theme_support( 'post-thumbnails', array( 'page' ) );
}

function enqueue_built_in_jquery_in_footer( &$scripts ) {

	if ( ! is_admin() ) $scripts->add_data( 'jquery', 'group', 1 );
}

function part( $slug, $name = null ) {

	echo get_part( $slug, $name );
}
	function get_part( $slug, $name = null ) {

		ob_start();
		get_template_part('parts/'. $slug, $name);
		$part = ob_get_contents();
		ob_clean();
		return $part;
	}
