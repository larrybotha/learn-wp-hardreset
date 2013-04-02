<?php

/*
 * This is where all the fancy stuff for your theme will be kept.
 *
 * We'll leave this file for now!
 */

	define( 'THEME_DIR', get_template_directory_uri() );
	define( 'THEME_NAME_THEME_BASEPATH', str_replace('\\', '/', dirname(__FILE__)) );
	define( 'GA_UACODE', 'UA-18410328-2' );

	// Add theme support - must come before init() hook
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'nav_menus' );
		add_theme_support( 'automatic_feed_links' );
	}

	// remove junk from head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');


/* *****************************************************************************
	 &actions
	 ************************************************************************** */

	/**
	 * Initialise scripts site-wide
	 *
	 * @since Theme Name 1.0
	 */
	function theme_name_init() {
		// If in the admin, nonet of the code below applies
		if (is_admin())
			return;

		// Register Scripts
		wp_deregister_script('jquery');
		wp_deregister_script('comment-reply');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, false, true);
		wp_register_script('comment-reply', ' /wp-includes/js/comment-reply.min.js', array('jquery'), false, true);

	} add_action('init', 'theme_name_init');

	/**
	 * Enqueues scripts and styles for front-end.
	 *
	 * @since Theme Name 1.0
	 */
	function theme_name_enqueue_scripts_styles() {
		global $wp_styles;

		/*
		 * Adds JavaScript to pages with the comment form to support sites with
		 * threaded comments (when in use).
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply', '', '', '', 'true' );

		wp_enqueue_script( 'jquery' );

	} add_action( 'wp_enqueue_scripts', 'theme_name_enqueue_scripts_styles' );


/* *****************************************************************************
	 &functions
	 ************************************************************************** */

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

?>