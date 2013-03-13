<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title(''); } ?></title>

		<?php
			/*
			 * Get the site's RSSS feed
			 */
		 ?>
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo bloginfo('rss2_url'); ?>">

		<?php
			/*
			 * Get your theme's CSS
			 */
		 ?>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">

		<?php
			/*
			 * This ensures that older browsers that don't support HTML5 will do so
			 */
		 ?>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<?php
			/*
			 * WordPress uses this to spit out things like scripts for your theme or
			 * plugins
			 */
		?>
		<?php wp_head(); ?>

		<?php // enqueue comment-reply.js (require for threaded comments)
			if ( is_singular() && get_option( 'thread_comments' ) )	wp_enqueue_script( 'comment-reply' );
		?>

	</head>

	<body <?php body_class(); ?>>

		<header class="header">

			<hgroup>
				<h1 class="site-logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2 class="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>

			<?php // main navigation ?>
			<nav class="primary-nav-wrap">
				<?php
					wp_nav_menu( array(
							'theme_location' => 'primary-nav',
							'fallback_cb' => 'default_primary_nav',
							'container'  => '',
							'menu_id' => 'primary-nav',
							'menu_class' => 'primary-nav'
						)
					);
				?>
			</nav>

			<?php // get searchform.php ?>
			<?php get_search_form(); ?>

		</header><!-- .header -->

		<div class="primary-content">