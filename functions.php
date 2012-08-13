<?php

/***************************************************************
* INDEX
* 	1.0 SETUP (concerns ADMIN + THEME)
* 		1.1 Enqueue Scripts
* 		1.2 Add Theme Support
* 		1.3 Register Menus
* 	2.0 ADMIN
* 		2.1 Remove default screen metaboxes
* 		2.2 Cleanup Dashboard
* 		2.3 Customize Admin
* 		2.4 Hide Login Errors
* 	3.0 THEME
* 		3.1 Clean <head>
* 		3.2 Add Section Class
* 		3.3 has_attachments()
* 
***************************************************************/


/***************************************************************
* 1.1 ENQUEUE SCRIPTS
***************************************************************/
   
	function theme_ressources() {
		
		// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	
		wp_deregister_script('l10n');
		wp_enqueue_script('init', get_template_directory_uri() . '/js/init.js', array('jquery'), '1.0', true ); 
		
		// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
		
		wp_register_style( 'custom-style', get_template_directory_uri() . '/less/style.less' );
	}
	add_action('wp_enqueue_scripts', 'theme_ressources'); 


/***************************************************************
* 1.2 Add Theme Support
***************************************************************/
	
	add_theme_support( 'post-thumbnails' );
	add_editor_style('css/editor.css');	
	
/***************************************************************
* 1.3 Register Menus
***************************************************************/ 

	register_nav_menus(array( 
		'main-nav' => 'Hauptnavigation', 
		'sub-nav' => 'Unternavigation' 
	));


/***************************************************************
* 1.4 Echoes bloginfo as shortcode
***************************************************************/
	
	function bloginfo_shortcode( $atts ) {
	    extract(shortcode_atts(array(
	        'key' => '',
	    ), $atts));
	    return get_bloginfo($key);
	}
	add_shortcode('bloginfo', 'bloginfo_shortcode');

/***************************************************************
*  2.1 Remove default screen metaboxes
***************************************************************/

	function remove_default_screen_metaboxes() {
	
		// remove_default_post_screen_metaboxes
		remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
		remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Metabox
		remove_meta_box( 'trackbacksdiv','post','normal' ); // Talkback Metabox
		remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
		 
		// remove_default_page_screen_metaboxes		 
		remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
		remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Metabox
		remove_meta_box( 'trackbacksdiv','post','normal' ); // Talkback Metabox
		remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
	 }
	add_action( 'admin_menu', 'remove_default_screen_metaboxes' );
	
	
/***************************************************************
*  2.2 Cleanup Dashboard
***************************************************************/

	function clean_dashboard_widgets() {
		global $wp_meta_boxes;
		
		//Right Now - Comments, Posts, Pages at a glance
		//unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		//Recent Comments
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		//Incoming Links
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		//Plugins - Popular, New and Recently updated Wordpress Plugins
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		//Wordpress Development Blog Feed
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		//Other Wordpress News Feed
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
		//Quick Press Form
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		//Recent Drafts List
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	}  
	add_action('wp_dashboard_setup', 'clean_dashboard_widgets');


/***************************************************************
* 2.3 Customize Admin: Change admin interface and login page
* Source: http://snipplr.com/view.php?codeview&id=63771
***************************************************************/
	
	// use custom login logo
	function custom_login_logo() {
	    echo '<style type="text/css">
	        .login h1 a { background-image:url('.get_bloginfo('template_url').'/images/wordpress-logo.png) !important; }
	    </style>';
	}
	add_action('login_head', 'custom_login_logo');
	
	//change admin footer text
	function remove_footer_admin () { ?>
		Webdesign by <a href="http://www.cccc.de/">Werbeagentur 4c media</a> • 0800 2222 633
	<?php }
	// add_filter('admin_footer_text', 'remove_footer_admin'); 
	
	// add own css to admin
	function add_admin_css() {
	     wp_enqueue_style('admin', get_bloginfo('template_directory').'/css/admin.css');
	}
	add_action('admin_print_styles', 'add_admin_css');
	
	// add own js to admin	
	function add_admin_js() {
	     wp_enqueue_script('admin', get_bloginfo('template_directory').'/js/admin.js');
	}
	add_action('admin_print_scripts', 'add_admin_js');
	
	
	function remove_items_from_adminbar(){
	        global $wp_admin_bar;
	        $wp_admin_bar->remove_menu( 'comments' );
	        $wp_admin_bar->remove_menu( 'backwpup' );
	        $wp_admin_bar->remove_menu( 'wp-logo' );
			$wp_admin_bar->remove_menu( 'appearance' );
			$wp_admin_bar->remove_menu( 'my-account-with-avatar' );
	}
	add_action( 'wp_before_admin_bar_render', 'remove_items_from_adminbar' );
	
	
/***************************************************************
* 2.4 Hide Login Errors - removes detailed login error information for security
***************************************************************/
	
	add_filter('login_errors', create_function('$a', "return null;"));

/***************************************************************
* 3.1 Clean <head>: Use Template instead.
***************************************************************/

	function remheadlink() {
		// Remove links to the extra feeds (e.g. category feeds)
		remove_action( 'wp_head', 'feed_links_extra', 3 );
		// Remove links to the general feeds (e.g. posts and comments)
		remove_action( 'wp_head', 'feed_links', 2 );
		// Remove link to the RSD service endpoint, EditURI link
		remove_action( 'wp_head', 'rsd_link' );
		// Remove link to the Windows Live Writer manifest file
		remove_action( 'wp_head', 'wlwmanifest_link' );
		// Remove index link
		remove_action( 'wp_head', 'index_rel_link' );
		// Remove prev link
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
		// Remove start link
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
		// Display relational links for adjacent posts
		remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
		// Remove XHTML generator showing WP version
		remove_action( 'wp_head', 'wp_generator' );
	}
	add_action('init', 'remheadlink');
	
	
/***************************************************************
* 3.2 Add Section Class: Add the top level page to the body class for coloured sections
***************************************************************/

	function body_class_section( $classes ) {
	    global $wpdb, $post;
	    if (is_page()) {
	        if ($post->post_parent) {
	            $parent  = end(get_post_ancestors($current_page_id));
	        } else {
	            $parent = $post->ID;
	        }
	        $post_data = get_post($parent, ARRAY_A);
	        $classes[] = 'section-' . $post_data['post_name'];
	    }
	    return $classes;
	}
	add_filter( 'body_class', 'body_class_section' );
	
	
/***************************************************************
* 3.3 has_attachments(): returns true if post has attachments
* Description: 
***************************************************************/
	
	function has_attachments( $post_id = null ) {
		$post_id = ( null === $post_id ) ? get_the_ID() : $post_id;
		$args = array(
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_status' => null,
			'post_parent' => $post_id
		);
		$attachments = get_posts($args);
		if ($attachments) 	
			return true;
		else
			return false;
	}
	
	
/***************************************************************
* X.X Code Template
***************************************************************/

