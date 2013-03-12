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

	<body <?php body_class($class); ?>>

	<div id="pagewrap">

		<header id="header" class="pagewidth">

			<hgroup>
				<h1 id="site-logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2 id="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>

			<?php // main navigation ?>
			<nav id="main-nav-wrap">
				<?php wp_nav_menu(array('theme_location' => 'main-nav' , 'fallback_cb' => 'default_main_nav' , 'container'  => '' , 'menu_id' => 'main-nav' , 'menu_class' => 'main-nav')); ?>
			</nav>

			<?php // get searchform.php ?>
			<div id="searchform-wrap">
				<?php get_search_form(); ?>
			</div>

			<div class="social-widget">
				<div class="rss"><a href="<?php echo bloginfo('rss2_url'); ?>">RSS</a></div>
			</div><!-- .social-widget -->

		</header><!-- #header -->

		<div id="body" class="pagewidth
		">