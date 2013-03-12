		</div><!-- #body -->

		<footer id="footer" class="pagewidth">

			<p class="back-top"><a href="#header">&uarr;</a></p>

			<?php // footer navigation ?>
			<?php wp_nav_menu(array('theme_location' => 'footer-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'footer-nav' , 'menu_class' => 'footer-nav')); ?>

			<div class="footer-text">
				<?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?><br>
				Powered by <a href="http://wordpress.org">WordPress</a>
			</div><!-- .footer-text -->

		</footer><!-- #footer -->

	</div><!-- #pagewrap -->

	<!-- wp_footer -->
	<?php wp_footer(); ?>

	</body>
</html>