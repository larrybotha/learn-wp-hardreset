<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */

get_header(); ?>

	<div class="content">

		<?php // the loop ?>
		<?php if (have_posts()) : ?>

			<section>
				<h1 class="page-title"><?php printf( __( 'Results for: %s', 'theme_name' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'content' , get_post_format()); ?>
				<?php endwhile; ?>

				<?php get_template_part( 'pagination'); ?>
			</section>

		<?php else : ?>

			<p><?php _e( 'Sorry, we didn\'t find what you were looking for. Please try again with a different keyword.', 'theme_name' ); ?></p>

		<?php endif; ?>

	</div><!-- .content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>