<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growingminds
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-info">
						<a href="http://oregonaitc.org">Oregon Agriculture in the Classroom</a> 501(c)(3) | 
						Copyright <?php echo date('Y'); ?> |
						<?php printf( esc_html__( 'Made with love by %1$s', 'growingminds' ), '<a target="_blank" href="http://abidewebdesign.com">Abide Web Design</a>' ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
