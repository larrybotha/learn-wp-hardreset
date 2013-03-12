<?php

/*
 * This is where all the fancy stuff for your theme will be kept.
 *
 * We'll leave this file for now!
 */

	// register navigations
	if (function_exists('register_nav_menus')) {
		register_nav_menus( array(
			'primary-menu' => __( 'Primary Navigation', 'theme_name' ),
			'footer-menu' => __( 'Footer Navigation', 'theme_name' ),
		) );
	}

	// Default Primary Nav Function
	function default_primary_nav() {
		echo '<ul id="primary-menu" class="primary-menu">';
		wp_list_pages('title_li=');
		echo '</ul>';
	}

	// Register Widgets
	if ( function_exists('register_sidebar') ) {
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4 class="widgettitle">',
			'after_title' => '</h4>',
		));
	}

?>