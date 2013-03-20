<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<?php
		/*
		 * If we're on a single post, don't output a link to the article
		 */
	?>
	<?php if (is_single()) : ?>
		<h1><?php the_title(); ?></h1>
	<?php else: ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php endif ?>

	<p>
		<span>Written by: <?php the_author_posts_link() ?>, on</span>

		<time datetime="<?php the_time('o-m-d') ?>" pubdate><?php the_time('M j, Y') ?>,</time>
		<?php
			/*
			 * Check if we have categories before outputting any markup
			 */
		?>
		<?php if (has_category()): ?>
			<span>categorised under: <?php the_category(', ') ?>,</span>
		<?php endif ?>

		<?php
			/*
			 * Check if we have tags before outputting any markup
			 */
		?>

		<?php
			/*
			 * Check if comments are enabled on this post before outputting any markup
			 */
		?>
		<?php if ( comments_open() ) : ?>
			<span>
				<?php
					comments_popup_link( __( '0 Comments', 'theme_name' ), __( '1 Comment', 'theme_name' ), __( '% Comments', 'theme_name' ) );
				?>
			</span>
		<?php endif;?>
	</p>

	<?php if (!is_single()): ?>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink() ?>">read more</a>
	<?php else: ?>
		<?php the_content(); ?>

		<?php if (has_tag()): ?>
		<div>
			Tags: <?php the_tags(' <span>', ', ', '</span>'); ?>
		</div>
		<?php endif ?>
	<?php endif ?>

</article><!-- .post -->