<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<!-- <?php do_action( 'twentyfourteen_credits' ); ?> -->
				<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a> -->
				<p class="footer-tag">Powered by <a href="http://wordpress.org" target="_blank">Wordpress</a> forked from the <a href="http://network.teachingmachine.tv/">丁モ丹ㄈ├┤工仈夕 . 爪丹ㄈ├┤工仈モ NETWORK THEME</p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>