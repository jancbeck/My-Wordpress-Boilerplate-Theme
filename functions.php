<?php

/** Hooks ****************************************************************/

/////////////
// Actions //
/////////////

remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

//add_action( 'init', 'add_editor_styles' );
add_action( 'init', 'add_theme_supports' );
add_action( 'init', 'register_menus' );
add_action( 'init', 'set_less_config' );

add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts_and_styles' );
add_action( 'wp_default_scripts', 'enqueue_built_in_jquery_in_footer' );

add_action( 'admin_menu', 'hide_default_dashboard_widgets' );
add_action( 'admin_print_styles', 'add_custom_admin_styles' );
add_action( 'admin_print_scripts', 'add_custom_admin_scripts' );
add_action( 'wp_before_admin_bar_render', 'remove_items_from_adminbar' );

/////////////
// Filters //
/////////////

add_filter( 'default_hidden_meta_boxes', 'hide_default_meta_boxes' );
add_filter( 'the_generator', '__return_false' );

////////////////
// Shortcodes //
////////////////

add_shortcode( 'bloginfo', 'bloginfo_shortcode' );

////////////////
// Debugging  //
////////////////

if (function_exists('c'))
	c( $wp_query );

/** Functions ************************************************************/


function enqueue_theme_scripts_and_styles() {

	wp_deregister_script( 'l10n') ;
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'app', get_template_directory_uri(). '/scripts/app.js', array('jquery'), false, true ); 

	if ( class_exists( 'WPLessPlugin' ) ) {

		wp_enqueue_style( 'print', get_template_directory_uri(). '/styles/print.less', false, false , 'print' );
		wp_enqueue_style( 'style', get_template_directory_uri(). '/styles/style.less', false, false , 'screen' );

	} else {

    	wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css' );
    
    }
}

function add_theme_supports() {
	add_theme_support( 'post-thumbnails' );
}

function register_menus() {
	register_nav_menus( array( 
		'main-nav' => __( 'Navigation' )
	));
}

function add_editor_styles() {
	if ( class_exists('WPLessPlugin') )
		add_editor_style( 'less/editor.less' );
	else
		add_editor_style( 'style.css' );
}

 function set_less_config() {
	if ( class_exists('WPLessPlugin') ) {
		$lessConfig = WPLessPlugin::getInstance()->getConfiguration();
		$lessConfig->setUploadDir(get_stylesheet_directory(). '/css');
		$lessConfig->setUploadUrl(get_stylesheet_directory_uri(). '/css');
	}
 }

function enqueue_built_in_jquery_in_footer( &$scripts ) {
	if ( ! is_admin() ) $scripts->add_data( 'jquery', 'group', 1 );
}

function bloginfo_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'key' => '',
    ), $atts ));
    return get_bloginfo( $key );
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

function hide_default_meta_boxes( $hidden ) {
	return array( 'postexcerpt', 'slugdiv', 'postcustom', 'trackbacksdiv', 'commentstatusdiv', 'commentsdiv', 'authordiv', 'revisionsdiv' );
}

function hide_default_dashboard_widgets() {
	
//	remove_meta_box('dashboard_right_now', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');

	remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
	remove_meta_box('dashboard_primary', 'dashboard', 'core');
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');
}  

function add_custom_admin_styles() {
    if ( class_exists( 'WPLessPlugin' ) ) wp_enqueue_style( 'admin', get_stylesheet_directory_uri() . '/styles/admin.less' );
}

function add_custom_admin_scripts() {
     wp_enqueue_script( 'admin', get_bloginfo('template_directory'). '/scripts/admin.js' );
}

function remove_items_from_adminbar(){
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'comments' );
    $wp_admin_bar->remove_menu( 'backwpup' );
    $wp_admin_bar->remove_menu( 'wp-logo' );
}
