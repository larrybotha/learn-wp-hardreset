<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<time datetime="<?php the_time('o-m-d') ?>" pubdate><?php the_time('M j, Y') ?></time>

	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<p>
		<span>Written by: <?php the_author_posts_link() ?>,</span>

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
		<?php if (has_tag()): ?>
		and tagged: <?php the_tags(' <span class="post-tag">', ', ', '</span>'); ?>
		<?php endif ?>

		<?php
			/*
			 * Check if comments are enabled on this post before outputting any markup
			 */
		?>
		<?php if ( comments_open() ) : ?>
			<span>
				<?php
					comments_popup_link( __( '0 Comment', 'theme_name' ), __( '1 Comment', 'theme_name' ), __( '% Comments', 'theme_name' ) );
				?>
			</span>
		<?php endif;?>
	</p>

	<?php the_content(); ?>

</article><!-- .post -->