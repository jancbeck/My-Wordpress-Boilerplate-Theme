<?php

/***************************************************************
* Function: custom_excerpt_more
* Description: custom excerpt ellipses for 2.9+
***************************************************************/ 

	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');



/***************************************************************
* Function: no_more_jumping
* Description: no more jumping for read more link
***************************************************************/ 
 
	function no_more_jumping($post) {
		return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');



/***************************************************************
* Function: category_id_class
* Description: Kategorien in Body-Class
***************************************************************/ 

	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
		$classes[] = $category->category_nicename;
		return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');



/***************************************************************
* Function: body_class_section
* Description: Add the top level page to the body class for coloured sections
***************************************************************/

	add_filter('body_class','body_class_section');
	
	function body_class_section($classes) {
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
	
	
/***************************************************************
* Function: bloginfo_shortcode
* Description: bloginfo as a shortcode
* Source: http://chrisbratlien.com/wordpress-tip-bloginfo-as-a-shortcode/
***************************************************************/
	
	function bloginfo_shortcode( $atts ) {
	    extract(shortcode_atts(array(
	        'key' => '',
	    ), $atts));
	    return get_bloginfo($key);
	}
	add_shortcode('bloginfo', 'bloginfo_shortcode');


/***************************************************************
* Function: has_attachments
* Description: returns true if post has attachments
***************************************************************/
	
	function has_attachments($post_id = null) {
		$post_id = ( null === $post_id ) ? get_the_ID() : $post_id;
		$args = array(
			'post_type' => 'attachment',
			'numberposts' => null,
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
* Function: 
* Description: 
* Source: 
***************************************************************/