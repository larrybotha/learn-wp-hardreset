<?php get_header(); ?>

	<div class="content">

		<?php // the loop ?>
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format()); ?>
			<?php endwhile; ?>

			<?php get_template_part( 'pagination'); ?>

		<?php else : ?>

			<p><?php _e( 'Sorry, nothing found.', 'theme_name' ); ?></p>

		<?php endif; ?>

	</div><!-- .content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>