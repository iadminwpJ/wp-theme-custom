<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iAdminWP
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-widgets">
			<div class="fw"><?php dynamic_sidebar( 'fw-1' ); ?></div>
			<div class="fw"><?php dynamic_sidebar( 'fw-2' ); ?></div>
			<div class="fw"><?php dynamic_sidebar( 'fw-3' ); ?></div>
		</div>
		<div class="site-info">
			<?php echo get_theme_mod( 'iadminwp_copyright_textbox', 'No copyright information has been saved yet.' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
