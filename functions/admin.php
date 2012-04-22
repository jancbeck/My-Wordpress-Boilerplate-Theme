<?php

/***************************************************************
* 3.1 Register Menus
***************************************************************/ 

	register_nav_menus(array('main-nav' => 'Hauptnavigation', 'sub-nav' => 'Kopfleistenmen&uuml;' ));


/***************************************************************
* Function: remove_default_post_screen_metaboxes
* Description: REMOVE META BOXES FROM DEFAULT POSTS SCREEN
***************************************************************/

	function remove_default_post_screen_metaboxes() {
		 remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
		 remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Metabox
		 remove_meta_box( 'trackbacksdiv','post','normal' ); // Talkback Metabox
		 remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
	 }
	add_action('admin_menu','remove_default_post_screen_metaboxes');



/***************************************************************
* Function: remove_default_page_screen_metaboxes
* Description: REMOVE META BOXES FROM DEFAULT PAGES SCREEN
***************************************************************/

	function remove_default_page_screen_metaboxes() {
		remove_meta_box( 'postcustom','post','normal' ); // Custom Fields Metabox
		remove_meta_box( 'commentstatusdiv','post','normal' ); // Comments Metabox
		remove_meta_box( 'trackbacksdiv','post','normal' ); // Talkback Metabox
		remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
	 }
	add_action('admin_menu','remove_default_page_screen_metaboxes'); 
	
	
	
/***************************************************************
* Function: my_custom_dashboard_widgets
* Description: Dashboard aufräumen
***************************************************************/

	function my_custom_dashboard_widgets() {
	
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
		//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		
		//Recent Drafts List
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	}  
	add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
	
	

/***************************************************************
* Function: wphd_hide_dashboard
* Description: hook onto dashboard and redirect to page edit view
* Source: http://wordpress.org/extend/plugins/wp-hide-dashboard/
***************************************************************/

function wphd_hide_dashboard() {

	global $blog, $current_user, $id, $parent_file, $wphd_user_capability, $wp_db_version;

	/* Now, let's fix the sidebar admin menu - go away, Dashboard link. */
	/* If Multisite, check whether they are in the User Dashboard before removing links */
	$user_id = get_current_user_id();
	$blogs = get_blogs_of_user($user_id);
	if (is_multisite() && empty($blogs)) {
		return;
	} else if (function_exists('remove_menu_page')) {
		remove_menu_page('index.php');							/* Hides Dashboard menu in 3.1 */
		remove_menu_page('separator1');	
		remove_submenu_page('profile.php', 'profile.php');		/* Hides Profile submenu link in 3.1. Really don't need to see it twice, do we? */
	}

	/* Last, but not least, let's redirect folks to their profile when they login or if they try to access the Dashboard via direct URL */
	if (is_multisite() && empty($blogs)) {
		return;
	} else if ($parent_file == 'index.php') {
		if (headers_sent()) {
			echo '<meta http-equiv="refresh" content="0;url='.admin_url('edit.php?post_type=page').'">';
			echo '<script type="text/javascript">document.location.href="'.admin_url('edit.php?post_type=page').'"</script>';
		} else {
			wp_redirect(admin_url('edit.php?post_type=page'));
			exit();
		}
	}
	
}

add_action('admin_init', 'wphd_hide_dashboard', 0);


/***************************************************************
* Function: custom_login_logo, custom_admin_logo
* Description: Change WordPress admin and login page logo
* Source: http://snipplr.com/view.php?codeview&id=63771
***************************************************************/

function custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_url').'/images/admin_login.png) !important; }
    </style>';
}
add_action('login_head', 'custom_login_logo');

function custom_admin_logo() {
  echo '<style type="text/css">
    #wp-admin-bar-wp-logo > .ab-item .ab-icon { background-image: url('.get_bloginfo('template_directory').'/images/admin_head.png) !important; background-position: 0 0; }
   	#wpadminbar.nojs #wp-admin-bar-wp-logo:hover > .ab-item .ab-icon, #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {  background-position: 0 -20px; }
    </style>';
}
add_action('admin_head', 'custom_admin_logo');

function remove_footer_admin () { ?>
	Webdesign by <a href="http://www.cccc.de/">Werbeagentur 4c media</a> • 0800 2222 633
<?php }
add_filter('admin_footer_text', 'remove_footer_admin'); //change admin footer text


/***************************************************************
* Function: 
* Description: 
* Source: 
***************************************************************/

	





