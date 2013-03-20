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

	// =functions

	/**
	 * Enqueues scripts and styles for front-end.
	 *
	 * @since Twenty Twelve 1.0
	 */
	function theme_name_scripts_styles() {
		global $wp_styles;

		/*
		 * Adds JavaScript to pages with the comment form to support
		 * sites with threaded comments (when in use).
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply', '', '', '', 'true' );

	} add_action( 'wp_enqueue_scripts', 'theme_name_scripts_styles' );

	// Default Primary Nav Function
	if ( ! function_exists( 'default_primary_nav' ) ) {
		function default_primary_nav() {
			echo '<ul id="primary-menu" class="primary-menu">';
			wp_list_pages('title_li=');
			echo '</ul>';
		}
	}

	// custom comment callback
	if ( ! function_exists( 'theme_name_comment' ) ) {
		/**
		 * Template for comments and pingbacks.
		 *
		 * To override this walker in a child theme without modifying the comments template
		 * simply create your own theme_name_comment(), and that function will be used instead.
		 *
		 * Used as a callback by wp_list_comments() for displaying the comments.
		 *
		 * @since Learn WordPress - Hard Reset Version
		 */
		function theme_name_comment( $comment, $args, $depth ) {
			$GLOBALS['comment'] = $comment;
			include 'comment-single.php';
		}
	}

?>