<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Life_After_Everything
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer"><?php
		if( function_exists('slbd_display_widgets') ) { echo slbd_display_widgets(); }?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'laetheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'laetheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'laetheme' ), 'laetheme', '<a href="https://zeroanalog.ca/">Zero Analog</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
