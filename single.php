<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="content">

		<?php // get loop.php ?>
		<?php get_template_part( 'content', get_post_format()); ?>

		<?php // get post-nav.php (next/prev post link) ?>
		<?php get_template_part( 'pagination'); ?>

		<?php // get comment template (comments.php) ?>
		<?php comments_template('', true); ?>

	</div><!-- .content -->

<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>