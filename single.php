<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package growingminds
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="box-content">
							<?php
							while ( have_posts() ) : the_post();
					
								get_template_part( 'template-parts/content', 'post' );
					
					
							endwhile; // End of the loop.
							?>
						</div>
					</div>
					<div class="col-sm-3 hidden-xs">
						<?php get_template_part('template-parts/content', 'sidebar'); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
