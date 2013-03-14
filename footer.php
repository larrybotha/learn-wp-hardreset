<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Theme_Name
 * @since Theme Name 1.0
 */
?>
		</div><!-- .primary-content -->

		<footer class="footer-content">

			<?php // footer navigation ?>
			<?php
				wp_nav_menu(array(
					'theme_location' => 'footer-nav',
					'fallback_cb' => '',
					'container'  => '',
					'menu_id' => 'footer-nav',
					'menu_class' => 'footer-nav'
					)
				);
			?>

			<div>
				<?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?> | Powered by <a href="http://wordpress.org">WordPress</a>
			</div><!-- .footer-text -->

		</footer><!-- .footer -->

		<!-- wp_footer -->
		<?php wp_footer(); ?>

	</body>
</html>