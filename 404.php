<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */

get_header(); ?>

	<div class="content">

		<h1><?php _e('404','theme_name'); ?></h1>
		<p><?php _e( 'Page not found.', 'theme_name' ); ?></p>

	</div><!-- .content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>