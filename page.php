<?php get_header(); ?>

	<div class="content">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="page-title"><?php the_title(); ?></h1>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</div><!-- .content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>