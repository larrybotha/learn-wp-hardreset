<?php get_header(); ?>

	<div id="content">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="page-title"><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:','theme_name').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			<?php edit_post_link(__('Edit','theme_name'), '[', ']'); ?>

			<?php // get comment template (comments.php) ?>
			<?php comments_template(); ?>

		<?php endwhile; ?>

	</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>