<?php get_header(); ?>

	<div class="content">

		<?php // the loop ?>
		<?php if (have_posts()) : ?>

			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'theme_name' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'inc/loop' , 'search'); ?>

			<?php endwhile; ?>

			<?php get_template_part( 'inc/pagination'); ?>

		<?php else : ?>

			<p><?php _e( 'Sorry, nothing found. Please try again with a different keyword.', 'theme_name' ); ?></p>

		<?php endif; ?>

	</div><!-- .content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>