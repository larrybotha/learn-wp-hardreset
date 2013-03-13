		</div><!-- .primary-content -->

		<footer class="footer">

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

			<div class="footer-text">
				<?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?> | Powered by <a href="http://wordpress.org">WordPress</a>
			</div><!-- .footer-text -->

		</footer><!-- .footer -->

	<!-- wp_footer -->
	<?php wp_footer(); ?>

	</body>
</html>