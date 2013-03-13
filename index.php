<?php get_header(); ?>

	<div class="content">

		<?php // the loop ?>
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part( 'inc/loop'); ?>

			<?php endwhile; ?>

			<?php get_template_part( 'inc/pagination'); ?>

		<?php else : ?>

			<p><?php _e( 'Sorry, nothing found.', 'theme_name' ); ?></p>

		<?php endif; ?>

	</div><!-- .content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>