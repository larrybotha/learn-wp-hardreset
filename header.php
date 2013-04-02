<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">

		<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title( '|', true, 'right' ); } ?></title>
		<meta description="">
		<meta name="author" content="Name">

		<?php
			/*
			 * Get the site's RSS feed
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

	</head>
	<?php flush(); ?>
	<body <?php body_class(); ?>>

		<header class="header">

			<hgroup>
				<?php
					/*
					 * Only use and H1 for text on the home page. This is to ensure that
					 * page content is not diluted on other pages where the H1 is
					 * valuable for SEO.
					 */
				?>
				<?php if (is_front_page()): ?>
				<h1 class="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2 class="site-description"><?php bloginfo('description'); ?></h2>
				<?php else: ?>
				<span class="logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></span>
				<span class="site-description"><?php bloginfo('description'); ?></span>
				<?php endif ?>
			</hgroup>

			<nav role="navigation">
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

		<div class="primary-content" role="main">