<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */

get_header(); ?>

	<section class="content">

		<?php if ( have_posts() ) : ?>
			<h1>
				<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'theme_name' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'theme_name' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'theme_name' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'theme_name' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'theme_name' ) ) . '</span>' );
					else :
						_e( 'Archives', 'theme_name' );
					endif;
				?>
			</h1>

			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;

				get_template_part( 'pagination' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; // have_posts() ?>

	</section><!-- .content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>