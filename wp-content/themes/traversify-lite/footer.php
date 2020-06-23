<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package traversify-lite
 */


/**
 * Content wrap
 * 
 * @hooked traversify_lite_content_wrap_end
*/
do_action( 'traversify_lite_wrap_footer' ); ?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="bottomfooter">
			
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( ' %1$s'), 'Copyright ©2020 All rights reserved' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
